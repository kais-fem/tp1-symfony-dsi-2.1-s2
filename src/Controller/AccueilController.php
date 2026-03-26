<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AccueilController extends AbstractController
{
    #[Route('/accueil', name: 'app_accueil')]
    public function index(): Response
    {
        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }

    #[Route('/bonjour/{prenom}', name: 'app_bonjour')]
    public function bonjour(string $prenom): Response
    {
        return new Response("<h1>Bonjour $prenom</h1>");
    }

    #[Route('/profile/{id}', name: 'app_profile', requirements: ['id' => '\d+'], defaults: ['id' => 1])]
    public function profile(int $id): Response
    {
        return new Response("<h1>profile de l'utilisateur $id</h1>");
    }
}
