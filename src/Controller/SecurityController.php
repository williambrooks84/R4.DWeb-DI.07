<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends AbstractController
{
    #[Route('/login', name:'lego_store_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // Check if user is already authenticated
        if ($this->getUser()) {
            // Redirect authenticated user to the 'home' route
            return $this->redirectToRoute('home'); // Redirect to the 'home' route
        }

        // Get the last username entered (email)
        $lastUsername = $authenticationUtils->getLastUsername();
        // Get the last authentication error (if any)
        $error = $authenticationUtils->getLastAuthenticationError();

        return $this->render('login.html.twig', [
            'controller_name' => 'LoginController',
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }
}
