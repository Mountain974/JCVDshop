<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use App\Repository\BouquetRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(ProduitRepository $produitRep, BouquetRepository $bouquetRepo): Response
    {
        $fakeReplicas = $bouquetRepo->findAll();
        $randomBouquet = $fakeReplicas[array_rand($fakeReplicas)];
        $randomfakeReplica = $randomBouquet->getFakeReplica();
        $randomSynonyme = $randomBouquet->getSynonyme();
        $randomfakeReplicaStylized = str_replace($randomSynonyme, "<span class='highlight'>$randomSynonyme</span>", $randomfakeReplica);




        return $this->render('home/index.html.twig', [
            'title' => 'Home',
            'fakeReplica' => $randomfakeReplicaStylized,
            'produits' => $produitRep->findAll(),
        ]);
    }
}
