<?php

namespace App\Controller;

use App\Repository\VehiculeRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AgenceController extends AbstractController
{
    #[Route('/agence', name: 'app_agence')]
    public function index(): Response
    {
        return $this->render('agence/index.html.twig', [
            'controller_name' => 'AgenceController',
        ]);
    }

    #[Route('/', name: 'home')]
    public function home():Response
    {
        return $this->render('agence/home.html.twig', [
    'presentation' => 'Agence location voiture',
    'adresse' => '15 rue leblanc marseil 13000',
    'Telephone' => '(+33)0786595254',
    'email' => 'agenceloc.dim@agence.com'
        ]);
    }



    #[Route('/agence/show/{id}', name: 'agence_show')]

    public function show($id, VehiculeRepository $repo): Response

    {
        $vehicule = $repo->find($id);

        return $this->render('agence/show.html.twig', [
            'vehicule' => $vehicule
        ]);
    }

}


