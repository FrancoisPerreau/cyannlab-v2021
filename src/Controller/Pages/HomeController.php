<?php

namespace App\Controller\Pages;

use App\Repository\PageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(PageRepository $pageRepository): Response
    {
        $page = $pageRepository->findOneByName('home');

        // dd($page->getHeroHeader()->getTitle());

        return $this->render('pages/home.html.twig', [
            'pageTitle' => $page->getTitle(),
            'pageDescription' => $page->getDescription(),
            'header' => $page->getHeroHeader(),
            'pageName' => $page->getName()
        ]);
    }
}
