<?php

namespace App\Controller;

use App\Repository\LegoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class LegoController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home(LegoRepository $legoRepository): Response
    {
        return $this->render('lego.html.twig', [
            'legos' => $legoRepository->findAll(), 
        ]);
    }

    #[Route('/{collection}', name: 'filter_by_collection', requirements: ['collection' => 'creator|star_wars|creator_expert'])]
    public function filter($collection, LegoRepository $legoRepository): Response
    {
        $collectionMap = [
            'creator' => 'Creator',
            'star_wars' => 'Star Wars',
            'creator_expert' => 'Creator Expert',
        ];

        $legos = $legoRepository->findByCollection($collectionMap[$collection]);

        return $this->render('lego.html.twig', [
            'legos' => $legos,
        ]);
    }
}
