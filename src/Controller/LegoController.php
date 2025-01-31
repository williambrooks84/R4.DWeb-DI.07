<?php

namespace App\Controller;

use App\Entity\Lego;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class LegoController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home(): Response
    {
        $lego = new Lego(10252, 'La coccinelle Volkswagen', 'Creator Expert');
        $lego->setDescription("Construis une réplique LEGO® Creator Expert de l'automobile la plus populaire au monde. Ce magnifique modèle LEGO est plein de détails authentiques qui capturent le charme et la personnalité de la voiture.");
        $lego->setPrice(94.99);
        $lego->setPieces(1167);
        $lego->setBoxImage('LEGO_10252_Box.png');
        $lego->setLegoImage('LEGO_10252_Main.jpg');

        return $this->render('lego.html.twig', [
            'lego' => $lego
        ]);
    }
}
