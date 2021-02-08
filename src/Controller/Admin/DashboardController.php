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
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('cyannlab');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Pages', 'far fa-newspaper', Page::class);
        yield MenuItem::linkToCrud('Headers', 'far fa-window-maximize', HeroHeader::class);
        yield MenuItem::linkToCrud('Projets', 'fas fa-desktop', Work::class);
        yield MenuItem::linkToCrud('Categories', 'fas fa-list', Categorie::class);
        yield MenuItem::linkToCrud('Utilisateur', 'fas fa-user', User::class);
    }
}
