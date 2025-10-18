<?php

namespace App\Controller;
use http\Env\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController ;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class EtudiantController extends AbstractController

{
    #[Route('/etudiant', name: 'etudiant')]
    public function index():Response
    {
        return new Response("Bonjour");
    }
   #[Route('/etudiant/{id}', name: 'affichage_etudiant', requirements: ['id' => '\d+'])]
    public function affichegeetudiant($id):Response
    {
        return new Response("étudiant numéro".$id);
    }
    #[Route('/etudiant/name/{name}', name: 'etudiant_name')]
    public function voirnom($name):Response
    {
        return $this->render('etudiant/voirnom.html.twig', ['name'=>$name]);

    }
}
