<?php

namespace App\Controller;

use App\Events;
use App\Entity\Bien;
use App\Entity\Jour;
use App\Entity\User;
use App\Form\BienType;
use App\Entity\Ouvrable;
use App\Entity\Typedebien;

// Interface
use App\Form\AjoutBienType;
use App\Entity\Proprietaire;
use App\Entity\Arrondissement;

// Entity, Form and repository
use App\Repository\JourRepository;
use App\Repository\UserRepository;
use App\Repository\TypedebienRepository;

use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ProprietaireRepository;
use App\Repository\ArrondissementRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\EventDispatcher\GenericEvent;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * @Route("/account")
 */
class AccountController extends Controller
{
    private $entityManager;
    private $passwordEncoder;
    private $TypedebienRepository;
    private $ArrondissementRepository;
    private $security;

    public function __construct(
        EntityManagerInterface $em,
        UserPasswordEncoderInterface $encoder,
        TypedebienRepository $TypedebienRepo,
        ArrondissementRepository $ArrondRepo,
        Security $secur
    )
    {
        $this->entityManager = $em;
        $this->passwordEncoder = $encoder;
        $this->TypedebienRepository = $TypedebienRepo;
        $this->ArrondissementRepository = $ArrondRepo;
        $this->security = $secur;
    }

    /**
     * @Route("/accueil", name="accueil_account")
     */
    public function index(Request $request, UserRepository $user)
    {
        //methode findUserImage Cree dans UserRepository
        $imageuser= $user->findUserImage();
        return $this->render('account/index.html.twig', [
        ]);
    }

    /**
     * @Route("/ajouter/salle", name="ajouter_salle")
     */
    public function ajouterSalle(Request $request, JourRepository $JourRepository,UserRepository $user)
    {   

       //methode findUserImage Cree dans UserRepository
       $imageuser= $user->findUserImage();
        
        
        $bien = new Bien();
        $form = $this->createForm(BienType::class, $bien);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $bien
                ->setDatePub(new \DateTime('now'))
                ->setEtat(false)
                ->setProprietaire($this->entityManager->getRepository(Proprietaire::class)->find($this->security->getUser()->getProprietaire()->getId()))
            ;
            for ($i=1; $i <= 7; $i++) {
                $O = new Ouvrable();
                $O
                    ->setBien($bien)
                    ->setJour($JourRepository->find($i))
                ;
                if (isset($_POST['jour_'.$i]) && $_POST['jour_'.$i] == 'OUI') {
                    $O->setDisponible(true);
                    if (isset($_POST['24h_24_'.$i])) {
                        $O
                            ->setOuverture(\DateTime::createFromFormat('H:i', '00:00'))
                            ->setFermeture(\DateTime::createFromFormat('H:i', '00:00'))
                        ;
                    } else {
                        $O
                            ->setOuverture(\DateTime::createFromFormat('H:i', $_POST['hOuverture'.$i]))
                            ->setFermeture(\DateTime::createFromFormat('H:i', $_POST['hFermeture'.$i]))
                        ;
                    }
                } else {
                    $O->setDisponible(false);
                }
                $this->entityManager->persist($O);
                $this->entityManager->flush();
            }

            return $this->redirectToRoute('edit_salle');
        }
        return $this->render('account/salle/add.html.twig', [
            'form' => $form->createView(),
            'jours' => $JourRepository->findAll(),
        ]);
    }

    /**
     * @Route("/liste/salle", name="liste_salle")
     */
    public function listeSalle(Request $request, JourRepository $JourRepository, UserRepository $user)
    {
         //methode findUserImage Cree dans UserRepository
          $imageuser= $user->findUserImage();
        
        return $this->render('account/salle/all.html.twig', [
            'salles' => $this->entityManager->getRepository(Bien::class)->findAll(),
        ]);
    }

    /**
     * @Route("/edit/salle", name="edit_salle")
     */
    public function editSalle(Request $request, JourRepository $JourRepository)
    {
        return $this->render('account/salle/edit.html.twig', [
        ]);
    }

    /**
     * @Route("/detail/salle", name="detail_salle", methods={"POST","GET"})
     */
    public function detailSalle(Request $request, JourRepository $JourRepository)
    {
        if ($request->isMethod('GET')) {
            return $this->redirectToRoute('liste_salle');
        }
        $bien = $this->entityManager->getRepository(Bien::class)->find($_POST['id']);
       
        $ouvrables = $this->entityManager->getRepository(Ouvrable::class)->findBy(['bien' => $bien]);
    
        $form = $this->createForm(BienType::class, $bien);
    
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            
        }
    
        return $this->render('account/salle/detail.html.twig', [
            'salle' => $bien,
            'form' => $form->createView(),
            'ouvrables' => $ouvrables,
        ]);
    }
}
