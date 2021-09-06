<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home/{prenom?World}/{age?20}", name="home")
     */
    public function index(string $prenom, int $age): Response
    {

        $jul = "Fais le signe JUL";

        $pokemons = [
            'pikachu',
            'salameche',
            'florizard'
        ];

        $ninja = [
            'village' => 'Konoha',
            'renard' => 'Kurama'
        ];
        

        return $this->render('home/index.html.twig',[
            'prenom' => $prenom,
            'jul' => $jul,
            'age' => $age,
            'pokemons' => $pokemons,
            'ninja' => $ninja
        ]);
    }
}
