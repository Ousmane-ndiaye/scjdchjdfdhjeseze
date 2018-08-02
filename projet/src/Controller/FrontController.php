<?php

namespace App\Controller;

use App\Events;
use App\Entity\Bien;
use App\Entity\User;
use App\Entity\Image;
use App\Form\UserType;
use App\Entity\Typedebien;

// Interface
use App\Entity\Commentaire;
use App\Entity\Reservation;
use App\Form\CommentaireType;

// Entity, Form and repository
use App\Form\ReservationType;
use App\Entity\Arrondissement;
use App\Repository\BienRepository;
use App\Repository\UserRepository;
use App\Repository\ImageRepository;



use App\Repository\TypedebienRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\CommentaireRepository;
use App\Repository\ProprietaireRepository;
use App\Repository\ArrondissementRepository;



use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\EventDispatcher\GenericEvent;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * @Route("/front")
 */
class FrontController extends Controller
{
    private $entityManager;
    private $passwordEncoder;
    private $TypedebienRepository;
    private $ArrondRepository;

    public function __construct(
        EntityManagerInterface $em,
        UserPasswordEncoderInterface $encoder,
        TypedebienRepository $TypedebienRepo,
        ArrondissementRepository $ArrondRepo,
        BienRepository $bien,
        ImageRepository $image

    )
    {
        $this->entityManager = $em;
        $this->passwordEncoder = $encoder;
        $this->TypedebienRepository = $TypedebienRepo;
        $this->ArrondRepository = $ArrondRepo;
        $this->BienRepository = $bien;
        $this->ImageRepository = $image;
    }

    /**
     * @Route("/accueil", name="accueil_front")
     */
    public function index(Request $request , UserRepository $user)
    {
        //methode findUserImage Cree dans UserRepository
        $imageuser= $user->findUserImage();
        $image= $this->ImageRepository->findAll();
        dump($image);
        foreach ($image as $key => $value) {
           $value->setImage(base64_encode(stream_get_contents($value->getImage())));

        }
      
       $salles= $this->BienRepository->findBy(array("etat"=>1));
       //dump($salles);
       $biens  = $this->get('knp_paginator')->paginate($salles,
        $request->query->get('page', 1)/*le numéro de la page à afficher*/,
          3/*nbre d'éléments par page*/
    );
        
        return $this->render('front/index.html.twig', [
            'activeA' => 'active',
            'arrondissements' => $this->ArrondRepository->findAll(),
            'types' => $this->TypedebienRepository->findAll(),
            'biens' => $biens

        ]);
      
    }

    /**
     * @Route("/catalogue", name="catalogue_front", methods={"GET", "POST"})
     */
    public function catalogue(Request $request ,UserRepository $user)
    { 

        //methode findUserImage Cree dans UserRepository
        $imageuser= $user->findUserImage();
        
        return $this->render('front/catalogue.html.twig', array(
            'activeC' => 'active'
        ));
    }

    /**
     * @Route("/partager/salle", name="partager_salle_front", methods={"GET", "POST"})
     */
    public function partagerSalle(Request $request, AuthenticationUtils $helper, EventDispatcherInterface $eventDispatcher,userRepository $user)
    {

       //methode findUserImage Cree dans UserRepository
       $imageuser= $user->findUserImage();
        

        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $password = $this->passwordEncoder->encodePassword($user, $user->getPassword());
            $user->setPassword($password);

            // Par defaut l'utilisateur aura toujours le rôle ROLE_USER
            $user->setEtat(false);
            
            $user->setRoles(['ROLE_PROPRIETAIRE']);

            // On enregistre l'utilisateur dans la base
            $this->entityManager->persist($user);
            $this->entityManager->flush();

            //On déclenche l'event
            $event = new GenericEvent($user);
            $eventDispatcher->dispatch(Events::USER_REGISTERED, $event);

            return $this->redirectToRoute('security_login');
        }
        return $this->render('front/ajout-salle.html.twig',[
            'activePS' => 'active',
            'last_username' => $helper->getLastUsername(),
            'error' => $helper->getLastAuthenticationError(),
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/reserver/{id}", name="reserver_salle", methods={"GET", "POST"})
     */
    public function reserver($id,Request $request, UserRepository $user,CommentaireRepository $comment )
    { 
        //methode findUserImage Cree dans UserRepository
                $imageuser= $user->findUserImage();

                     $image= $this->ImageRepository->findAll();
                     //dump($image)
                     foreach ($image as $key => $value) {
                        $value->setImage(base64_encode(stream_get_contents($value->getImage())));
             
                     }
        if (!is_Numeric($id)){
            return $this->redirectToRoute('accueil_front');
        }
    
                $salle = $this->BienRepository->find($id);
                dump($salle);

            if (!$salle ) {
                throw $this->createNotFoundException(
                    'Oups Pas de Salle disponible  '.$id
                );
            }

        //Reservation
        $reservation = new Reservation();
        $form = $this->createForm(ReservationType::class,   $reservation);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            
            $bien = $this->BienRepository->find($id);
            $reservation->setBien($bien ); 
            $reservation->setEtat(false);
            $reservation->setDateReservation( new \DateTime('now'));

            //periode a deteriner par le user
            // On enregistre dans la base
            $em = $this->getDoctrine()->getManager();
            $em->persist($reservation);
            $em->flush();
        }


        //Commentaires
        $commentaire = new Commentaire();
        $formCommnent = $this->createForm(CommentaireType::class,    $commentaire);

        $formCommnent->handleRequest($request);
        if ($formCommnent->isSubmitted() && $formCommnent->isValid()) {
            
            $bien = $this->BienRepository->find($id);
            $commentaire->setBien($bien); 
            //Recuperation du user courant qui est connecté par la methode getUser()
            $userId = $this->getUser()->getId();
            $use = $user->find($userId);
            $commentaire->setUser($use);
            $commentaire->setEtat(true);
            $commentaire->setDatePub( new \DateTime('now'));

            // On enregistre dans la base
            $em = $this->getDoctrine()->getManager();
            $em->persist($commentaire);
            $em->flush();
        }

        //Affichage des commentaires seulement si vous ete connecte c a dire profil proprietaire
        $comments= $comment->findBy(array('bien'=>$id,'etat'=>true));

        return $this->render('front/reserver-salle.html.twig', array(

            "salle"=>$salle,
            "form"=> $form->createView(),
            "salle"=>$salle,
            "formC"=> $formCommnent->createView(),
            "commentaires"=>$comments
        ));
    }






    
}
