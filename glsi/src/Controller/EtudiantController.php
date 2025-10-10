<?php

namespace App\Controller;
use http\Env\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController ;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class EtudiantController extends AbstractController

{
    /**
     * @Router ("/etudiant", name ="etudiant")
     */
    public function index():Response
    {
        return new Response("bonjour");
    }
    /**
     * @Router ("/etudiant/{id}", name ="affichage_etudiant")
     */
    public function affichegeetudiant($id):Response
    {
        return new Response("bonjour".$id);
    }
    /**
     * @Router ("/etudiant/{name}", name ="etudiant_name")
     */
    public function voirnom($name):Response
    {
        return $this->render('etudiant/voirnom.html.twig', ['name'=>$name]);

    }
}