<?php

namespace App\Controller;

use App\Events;
use App\Entity\Jour;
use App\Entity\Bien;
use App\Entity\User;
use App\Form\BienType;
use App\Entity\Ouvrable;
use App\Entity\Typedebien;

// Interface
use App\Form\AjoutBienType;
use App\Entity\Arrondissement;
use App\Repository\UserRepository;

// Entity, Form and repository
use App\Repository\TypedebienRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ArrondissementRepository;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\EventDispatcher\GenericEvent;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Repository\JourRepository;

/**
 * @Route("/account")
 */
class AccountController extends Controller
{
    private $entityManager;
    private $passwordEncoder;
    private $TypedebienRepository;
    private $ArrondissementRepository;

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
        $this->ArrondissementRepository = $ArrondRepo;
    }

    /**
     * @Route("/accueil", name="accueil_account")
     */
    public function index(Request $request)
    {
        return $this->render('account/index.html.twig', [
        ]);
    }

    /**
     * @Route("/ajouter/salle", name="ajouter_salle")
     */
    public function ajouterSalle(Request $request, JourRepository $JourRepository)
    {
        $bien = new Bien();
        $form = $this->createForm(BienType::class, $bien);

        return $this->render('account/salle/add.html.twig', [
            'form' => $form->createView(),
            'jours' => $JourRepository->findAll(),
        ]);
    }
}
