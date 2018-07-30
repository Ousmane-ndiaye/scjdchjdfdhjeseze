<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Doctrine\Common\Persistence\ObjectManager;

class SecurityController extends AbstractController
{
    /**
     * @var \Symfony\Component\Routing\RouterInterface
     */
    private $router;

    /**
     * @var \Symfony\Component\Security\Core\Security
     */
    private $security;

    /**
     * @var \Symfony\Component\HttpFoundation\Session\SessionInterface
     */
    private $session;

    private $encoderFactory;

    private $entityManager;

    /**
     * @param RouterInterface $router
     * @param Security $security
     *  @param SessionInterface $session
     */
    public function __construct(
            RouterInterface $router,
            Security $security,
            EntityManagerInterface $em,
            SessionInterface $session,
            EncoderFactoryInterface $encoderFactory
        )
    {
        $this->router = $router;
        $this->security = $security;
        $this->session = $session;
        $this->entityManager = $em;
        $this->encoderFactory = $encoderFactory;
    }

    /**
     * @Route("/login", name="security_login")
     */
    public function login(AuthenticationUtils $helper): Response
    {
        return $this->render('Security/login.html.twig', [
            // dernier username saisi (si il y en a un)
            'last_username' => $helper->getLastUsername(),
            // La derniere erreur de connexion (si il y en a une)
            'error' => $helper->getLastAuthenticationError(),
        ]);
    }

    /**
     * @Route("/authentication", name="user_authentication", methods={"POST"})
     */
    public function verifUser(Request $request)
    {
        $response;

        if ($request->isXmlHttpRequest())
        {
            $user = $this->entityManager->getRepository(User::class)->findOneByEmail($request->request->get('username'));

            if ($user && password_verify($request->request->get('password'), $user->getPassword())) {

                $response = new Response(json_encode([
                    'massage' => null,
                    'error' => false,
                ]));
            } else {
                $response = new Response(json_encode([
                    'message' => 'E-mail ou Mot de passe invalide.',
                    'error' => true,
                ]));
            }
        }
        return $response;
    }

    /**
     * La route pour se deconnecter.
     *
     * Mais celle ci ne doit jamais être executé car symfony l'interceptera avant.
     *
     *
     * @Route("/logout", name="security_logout")
     */
    public function logout(): void
    {
        throw new \Exception('This should never be reached!');
    }

    /**
     * La route pour diriger l'utilisateur vers sa page d'accueil après connexion
     *
     *
     * @param Request $request
     * @return RedirectResponse
     * @Route("/after/login", name="after_login")
     */
    public function onAuthenticationSuccess(Request $request)
    {
        //Récupération de la liste des roles de l'utilisateur courant
        $roles = $this->security->getToken()->getRoles();
        // Tranformation de cette liste en tableau
        $rolesTab = array_map(function($role){
            return $role->getRole();
        }, $roles);
        // If is a admin or super admin we redirect to the backoffice area
        if (in_array('ROLE_ADMIN', $rolesTab, true) || in_array('ROLE_SUPER_ADMIN', $rolesTab, true))
            $redirection = new RedirectResponse($this->router->generate('accueil_back'));
        // Elseif is a user or proprietaire we redirect to the accountoffice area
        elseif (in_array('ROLE_USER', $rolesTab, true) || in_array('ROLE_PROPRIETAIRE', $rolesTab, true))
            $redirection = new RedirectResponse($this->router->generate('accueil_account'));
        // otherwise we redirect user to the member area
        else
            $redirection = new RedirectResponse($this->router->generate('accueil_front'));

        return $redirection;
    }

    /**
     * La route pour diriger l'utilisateur vers sa page d'accueil après déconnexion
     *
     *
     * @param Request $request
     * @return RedirectResponse
     * @Route("/after/logout", name="after_logout")
     */
    public function onLogoutSuccess(Request $request,ObjectManager $manager)
    {
        // Get list of roles for current user
        $roles = $this->security->getToken()->getRoles();
        // Tranform this list in array
        $rolesTab = array_map(function($role){
            return $role->getRole();
        }, $roles);

        // If is a admin or super admin we redirect to the login area. Here we used FoseUserBundle bundle
        if (in_array('ROLE_ADMIN', $rolesTab, true) || in_array('ROLE_SUPER_ADMIN', $rolesTab, true))
            $response = new RedirectResponse($this->router->generate('security_login'));
        // otherwise we redirect user to the homepage of website
        else
            $response = new RedirectResponse($this->router->generate('accueil_front'));

        return $response;
    }
}