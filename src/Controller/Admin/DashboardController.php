<?php

namespace App\Controller\Admin;

use App\Entity\Categorie;
use App\Entity\HeroHeader;
use App\Entity\Page;
use App\Entity\User;
use App\Entity\Work;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\CrudUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        // return parent::index();
        $routeBuilder = $this->get(CrudUrlGenerator::class)->build();
        return $this->redirect($routeBuilder->setController(WorkCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('cyannlab');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToUrl('Accueil', 'fa fa-home', '/');
        // yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');

        yield MenuItem::section('Les projets');
        yield MenuItem::linkToCrud('Projets', 'fas fa-desktop', Work::class);
        yield MenuItem::linkToCrud('Categories', 'fas fa-list', Categorie::class);

        yield MenuItem::section('Les pages');
        yield MenuItem::linkToCrud('Headers', 'far fa-window-maximize', HeroHeader::class);
        yield MenuItem::linkToCrud('Pages', 'far fa-newspaper', Page::class);

        yield MenuItem::section('Les utilisateurs');
        yield MenuItem::linkToCrud('Comptes', 'fas fa-user', User::class);
    }
}
