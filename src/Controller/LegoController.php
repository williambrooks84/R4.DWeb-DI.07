<?php

namespace App\Controller;

use App\Repository\LegoRepository;
use App\Repository\LegoCollectionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LegoController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home(LegoRepository $legoRepository, LegoCollectionRepository $legoCollectionRepository): Response
    {
        if ($this->getUser()) {
            // If user is logged in, show all collections
            $collections = $legoCollectionRepository->findAll();
        } else {
            // If user is not logged in, show only collections with showDisconnected = 1
            $collections = $legoCollectionRepository->findBy(['showDisconnected' => 1]);
        }

        return $this->render('lego.html.twig', [
            'legos' => $legoRepository->findAll(),
            'collections' => $collections, // Passe les collections au template
        ]);
    }

    #[Route('/collections/{id}', name: 'filter_by_collection')]
    public function filter($id, LegoRepository $legoRepository, LegoCollectionRepository $legoCollectionRepository): Response
    {
        // On cherche la collection par son id
        $collection = $legoCollectionRepository->find($id);

        // Si la collection n'est pas trouvée, on renvoie une erreur 404
        if (!$collection) {
            throw $this->createNotFoundException('Collection not found');
        }

        // Récupère les legos associés à cette collection
        $legos = $legoRepository->findBy(['collection' => $collection]);

        // Filtrer les collections uniquement si l'utilisateur n'est pas connecté
        if ($this->getUser()) {
            $collections = $legoCollectionRepository->findAll();  // All collections visible for authenticated users
        } else {
            $collections = $legoCollectionRepository->findBy(['showDisconnected' => 1]);  // Only show collections where 'showDisconnected' = 1 for non-authenticated users
        }

        // Retourne le rendu avec les legos filtrés
        return $this->render('lego.html.twig', [
            'legos' => $legos,
            'collections' => $collections,
        ]);
    }
}