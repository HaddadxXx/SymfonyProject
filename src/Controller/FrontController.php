<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FrontController extends AbstractController
{
    #[Route('/front', name: 'front')]
    public function front(): Response
    {
        return $this->render('base.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }
    #[Route('/hh', name: 'app_front')]
    public function index(): Response
    {
        return $this->render('front/index.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }
    #[Route('/back', name: 'back')]
    public function back(): Response
    {
        return $this->render('back/index.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }
}
