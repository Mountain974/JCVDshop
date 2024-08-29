<?php

namespace App\Controller;

use App\Entity\Ferraille;
use App\Repository\FerrailleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FerrailleController extends AbstractController
{
    #[Route('/joujouxJCVD', name: 'app_ferraille')]
    public function index(FerrailleRepository $ferrailleRep): Response
    {
        // Renvoyer le template Twig avec les données
        return $this->render('ferraille/index.html.twig', [
            'controller_name' => 'FerrailleController',
            'ferrailles' => $ferrailleRep->findAll(),
        ]);
    }
}