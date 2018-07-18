<?php

namespace App\Controller;

use App\Events;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\EventDispatcher\GenericEvent;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

// Interface
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

// Entity, Form and repository
use App\Entity\User;
use App\Entity\Typedebien;
use App\Entity\Arrondissement;

use App\Repository\UserRepository;
use App\Repository\TypedebienRepository;
use App\Repository\ArrondissementRepository;

use App\Form\UserType;

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
        ArrondissementRepository $ArrondRepo
    )
    {
        $this->entityManager = $em;
        $this->passwordEncoder = $encoder;
        $this->TypedebienRepository = $TypedebienRepo;
        $this->ArrondRepository = $ArrondRepo;
    }

    /**
     * @Route("/accueil", name="accueil_front")
     */
    public function index(Request $request)
    {
        return $this->render('front/index.html.twig', [
            'activeA' => 'active',
            'arrondissements' => $this->ArrondRepository->findAll(),
            'types' => $this->TypedebienRepository->findAll(),
        ]);
    }

    /**
     * @Route("/catalogue", name="catalogue_front", methods={"GET", "POST"})
     */
    public function catalogue(Request $request)
    {
        return $this->render('front/catalogue.html.twig', array(
            'activeC' => 'active'
        ));
    }

    /**
     * @Route("/partager/salle", name="partager_salle_front", methods={"GET", "POST"})
     */
    public function partagerSalle(Request $request, AuthenticationUtils $helper, EventDispatcherInterface $eventDispatcher)
    {
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
}
