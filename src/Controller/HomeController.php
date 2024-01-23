<?php

namespace App\Controller;

use App\Repository\TodoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(TodoRepository $todos): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'todos' => $todos,
            $todos = $todos->findAll(),
            //dd($todos)
        ]);
    }
    #[Route('/')]
    public function redirectToHome(): Response
    {
        return $this->redirectToRoute('app_home');
    }
}
