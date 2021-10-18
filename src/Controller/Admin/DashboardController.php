<?php

namespace App\Controller\Admin;

use App\Entity\Address;
use App\Entity\Articles;
use App\Entity\Capacity;
use App\Entity\Contractor;
use App\Entity\VehicleType;
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
            ->setTitle('Transport TMS');
    }

    public function configureMenuItems(): iterable
    {
        // yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
         yield MenuItem::linktoRoute('Powrót na stronę', 'fas fa-home', 'index');
         yield MenuItem::linkToCrud('Articles', 'fas fa-list', Articles::class);
         yield MenuItem::linkToCrud('Address', 'fas fa-list', Address::class);
         yield MenuItem::linkToCrud('Capacity', 'fas fa-list', Capacity::class);
         yield MenuItem::linkToCrud('Contractor', 'fas fa-list', Contractor::class);
         yield MenuItem::linkToCrud('Vehicle Type', 'fas fa-list', VehicleType::class);
         
    }
}
