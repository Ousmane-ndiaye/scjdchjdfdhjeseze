<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/back")
 */
class BackController extends Controller
{
    /**
     * @Route("/accueil", name="accueil_back")
     */
    public function index()
    {
        return $this->render('back/index.html.twig', [
        ]);
    }
}
