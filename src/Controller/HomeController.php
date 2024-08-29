<?php

namespace App\Controller;

use App\Repository\BouquetRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(BouquetRepository $bouquetRepo): Response
    {
        $fakeReplicas = $bouquetRepo->findAll();
        $randomfakeReplicas = $fakeReplicas[array_rand($fakeReplicas)]->getFakeReplica();

        return $this->render('home/index.html.twig', [
            'title' => 'Home',
            'fakeReplica' => $randomfakeReplicas,
        ]);
    }
}
