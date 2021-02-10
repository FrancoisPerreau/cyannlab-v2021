<?php

namespace App\Controller\Pages;

use App\Repository\PageRepository;
use App\Repository\WorkRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home(PageRepository $pageRepository, WorkRepository $workRepository): Response
    {
        $page = $pageRepository->findOneByName('home');

        //findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
        $worksOnHome = $workRepository->findBy(['isOnHome' => 1], ['created_at' => 'DESC'], 4);


        return $this->render('pages/home.html.twig', [
            'pageTitle' => $page->getTitle(),
            'pageDescription' => $page->getDescription(),
            'header' => $page->getHeroHeader(),
            'works' => $worksOnHome
        ]);
    }
}
