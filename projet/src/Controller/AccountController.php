<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/account")
 */
class AccountController extends Controller
{
    /**
     * @Route("/accueil", name="accueil_account")
     */
    public function index()
    {
        return $this->render('account/index.html.twig', [
        ]);
    }
}
