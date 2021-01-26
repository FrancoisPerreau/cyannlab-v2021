<?php

namespace App\Controller\Pages;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(): Response
    {
        return $this->render('pages/home.html.twig', [
            'pageTitle' => 'Développeur & graphic designer',
            'pageDescription' => "Vous souhaitez améliorer votre communication et votre visibilité ? Je conçois des sites internet, réalise votre identité visuelle et vous accompagne tout au long de votre projet."
        ]);
    }
}
