<?php

namespace App\Controller\Pages;

use App\Repository\CategorieRepository;
use App\Repository\PageRepository;
use App\Repository\WorkRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WorkController extends AbstractController
{
    /**
     * @Route("/réalisations", name="works")
     */
    public function works(PageRepository $pageRepository, WorkRepository $workRepository, CategorieRepository $categorieRepository): Response
    {
        $page = $pageRepository->findOneByName('works');
        // $works = $workRepository->findAll();

        $works = $workRepository->findBy([], ['created_at' => 'DESC'], 16);
        $categories = $categorieRepository->findAll();

        return $this->render('pages/works.html.twig', [
            'pageTitle' => $page->getTitle(),
            'pageDescription' => $page->getDescription(),
            'header' => $page->getHeroHeader(),
            'pageName' => $page->getName(),
            'works' => $works,
            'categories' => $categories
        ]);
    }



    /**
     * @Route("/réalisations/{slug}", name="works_filter")
     */
    public function worksFilter($slug, PageRepository $pageRepository, WorkRepository $workRepository, CategorieRepository $categorieRepository): Response
    {
        $works = $workRepository->findByCategorieSlug($slug);
        if (!$works) return $this->redirectToRoute('works');

        $page = $pageRepository->findOneByName('works');
        $categories = $categorieRepository->findAll();

        return $this->render('pages/works.html.twig', [
            'pageTitle' => $page->getTitle(),
            'pageDescription' => $page->getDescription(),
            'header' => $page->getHeroHeader(),
            'pageName' => $page->getName(),
            'works' => $works,
            'categories' => $categories
        ]);
    }


    /**
     * @Route("/réalisation/{id}", name="show_work")
     */
    public function showWork($id, PageRepository $pageRepository, WorkRepository $workRepository, CategorieRepository $categorieRepository): Response
    {
        $work = $workRepository->find($id);
        $page = $pageRepository->findOneByName('works');
        $categories = $categorieRepository->findAll();

        $previousWork = $workRepository->findPreviousWork($work->getCreatedAt());
        $nextWork = $workRepository->findNextWork($work->getCreatedAt());


        return $this->render('pages/showWork.html.twig', [
            'pageTitle' => $work->getTitle(),
            'pageDescription' => $work->getDescription(),
            'header' => $page->getHeroHeader(),
            'work' => $work,
            'previousWork' => $previousWork,
            'nextWork' => $nextWork,
            'categories' => $categories
        ]);
    }
}
