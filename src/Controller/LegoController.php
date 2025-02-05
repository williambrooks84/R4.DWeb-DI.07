<?php

namespace App\Controller;

use App\Service\LegoService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class LegoController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home(LegoService $legoService): Response
    {
        return $this->render('lego.html.twig', [
            'legos' => $legoService->getLegos(),
        ]);
    }
    #[Route('/{collection}', name: 'filter_by_collection')]
    public function filter($collection, LegoService $legoService): Response
    {
        return $this->render('lego.html.twig', [
            'legos' => $legoService->getLegosByCollection($collection),
        ]);
    }
}
