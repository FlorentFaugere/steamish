<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GbController extends AbstractController
{
    #[Route('/gb', name: 'app_gb')]
    public function index(): Response
    {
        return $this->render('gb/index.html.twig', [
            'controller_name' => 'GbController',
        ]);
    }
}
