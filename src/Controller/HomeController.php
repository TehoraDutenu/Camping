<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
<<<<<<< HEAD
=======

    #[Route('/mon-compte', name: 'app_mon_compte')]
    public function monCompte()
    {
        // - Admin
        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->render('home/monCompteAdmin.html.twig', []);
        }
        // - Office
        if ($this->isGranted('ROLE_OFFICE')) {
            return $this->render('home/monCompteOffice.html.twig', []);
        }
        // - Proprietaire
        if ($this->isGranted('ROLE_PROPRIETAIRE')) {
            return $this->render('home/monCompteProprietaire.html.twig', []);
        }
        // - Locataire
        if ($this->isGranted('ROLE_LOCATAIRE')) {
            return $this->render('home/monCompteLocataire.html.twig', []);
        }
    }
>>>>>>> 96f78bed3dce7562d191841684854b26bad5d1d9
}
