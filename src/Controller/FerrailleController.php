<?php

namespace App\Controller;

use App\Entity\Ferraille;
use App\Repository\FerrailleRepository;
use App\Repository\BouquetRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FerrailleController extends AbstractController
{
    #[Route('/joujouxJCVD', name: 'app_ferraille')]
    public function index(FerrailleRepository $ferrailleRep, BouquetRepository $bouquetRepo): Response
    {
        $fakeReplicas = $bouquetRepo->findAll();
        $randomfakeReplicas = $fakeReplicas[array_rand($fakeReplicas)]->getFakeReplica();
        // Renvoyer le template Twig avec les données
        return $this->render('ferraille/index.html.twig', [
            'title' => 'Joujoux',
            'fakeReplica' => $randomfakeReplicas,
            'ferrailles' => $ferrailleRep->findAll(),
        ]);
    }
}