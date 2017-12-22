<?php

// src/Controller/ProjetController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ProjetController extends Controller{

    /**
    * @Route("/projet", name="projet_list")
    */
    public function projet_list(){

        $temp       = "Vous êtes sur la page /projet";
        $constante  = "J'affiche la liste de tous les projets.";

        return $this->render(
            'blog/leblog.html.twig', array(
            'temp' => $temp,
            'constante' => $constante

        ));
    }

    /**
    * @Route("/projet/", name="projet_list_slash")
    */
    public function projet_list_slash(){

        $temp       = "Vous êtes sur la page /projet";
        $constante  = "J'affiche la liste de tous les projets.";

        return $this->render(
            'blog/leblog.html.twig', array(
            'temp' => $temp,
            'constante' => $constante

        ));
    }

    /**
    * @Route("/projet/{slug}", name="projet_id")
    */
    public function projet_id($slug){

        $temp       = "Vous êtes sur la page /projet/" . $slug;
        $constante  = "Je n'affiche qu'un seul projet, avec pour ID : " . $slug . ".";

        return $this->render(
            'blog/leblog.html.twig', array(
            'temp' => $temp,
            'constante' => $constante
        ));
    }


}

?>
