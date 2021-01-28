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
        // $worksOnHome = $workRepository->findBy(['isOnHome' => 1]);

        //findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
        $worksOnHome = $workRepository->findBy(['isOnHome' => 1], ['created_at' => 'ASC'], 4);

        // dd($worksOnHome);

        return $this->render('pages/home.html.twig', [
            'pageTitle' => $page->getTitle(),
            'pageDescription' => $page->getDescription(),
            'header' => $page->getHeroHeader(),
            'pageName' => $page->getName(),
            'works' => $worksOnHome
        ]);
    }
}
