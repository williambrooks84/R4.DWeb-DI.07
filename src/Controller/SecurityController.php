<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\VarDumper\VarDumper;

class SecurityController extends AbstractController
{
    #[Route('/login', name: 'lego_store_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // Récupérer le dernier utilisateur saisi
        $lastUsername = $authenticationUtils->getLastUsername();
        
        // Récupérer le dernier message d'erreur d'authentification (si disponible)
        $error = $authenticationUtils->getLastAuthenticationError();
        
        return $this->render('login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

}
