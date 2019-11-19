<?php

namespace App\Controller\Admin;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Psr\Log\LoggerInterface;

class AdminController extends AbstractController
{
    /**
    * @Route("/admin", name="admin_dashboard")
    */
    public function adminDashboard(LoggerInterface $logger)
    {
        $user = $this->getUser();
        $logger->info('I just got the logger');

        return $this->render('admin/dashboard.html.twig', [
            'user' => $user,
        ]);
    }
}