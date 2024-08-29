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
        $randomBouquet = $fakeReplicas[array_rand($fakeReplicas)];
        $randomfakeReplica = $randomBouquet->getFakeReplica();
        $randomSynonyme = $randomBouquet->getSynonyme();
        $randomfakeReplicaStylized = str_replace($randomSynonyme, "<span class='highlight'>$randomSynonyme</span>", $randomfakeReplica);
        // Renvoyer le template Twig avec les données
        return $this->render('ferraille/index.html.twig', [
            'title' => 'Joujoux',
            'fakeReplica' => $randomfakeReplicaStylized,
            'ferrailles' => $ferrailleRep->findAll(),
        ]);
    }
}