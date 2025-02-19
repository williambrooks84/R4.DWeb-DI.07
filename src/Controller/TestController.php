<?php

/* indique où "vit" ce fichier */
namespace App\Controller;

/* indique l'utilisation du bon bundle pour gérer nos routes */
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

/* le nom de la classe doit être cohérent avec le nom du fichier */
class TestController
{
    // L'attribute #[Route] indique ici que l'on associe la route
    // "/" à la méthode home() pour que Symfony l'exécute chaque fois
    // que l'on accède à la racine de notre site.

    #[Route('/', name: 'home')]
    public function home(): Response
    {
        $content = "<html><body><p>Get lost.</p></body></html>";
        return new Response($content);
    }
}