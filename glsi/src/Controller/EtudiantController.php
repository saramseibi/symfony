<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EtudiantController extends AbstractController
{
    #[Route('/etudiant', name: 'etudiant')]
    public function index(): Response
    {
        return new Response("bonjour ");
    }

    #[Route('/list', name: 'liste')]
    public function listeEtudiant(){
        $etudiants= array("ali","Med");

        $modules = [
            [
                'id' => 1,
                'nom' => 'Symfony',
                'enseignant' => 'Ali',
                'nbrHeures' => 42,
                'date' => '12-12-2021'
            ],
            [
                'id' => 2,
                'nom' => 'Symfony',
                'enseignant' => 'Aliii',
                'nbrHeures' => 42,
                'date' => '12-12-2021'
            ]
        ];

        return $this->render('etudiant/list.html.twig',
            array('etudiants'=>$etudiants, "listeModules"=>$modules));
    }
    #[Route('/affectation', name: 'Affectation')]
    public function affectation()
    {
        return $this->render(view: 'etudiant/affectation.html.twig');
    }
    #[Route('/indexFils', name: 'index_fils')]
    public function indexFils(): Response
    {
        // Rendu de la vue index.html.twig
        return $this->render('etudiant/layout.html.twig');
    }
}