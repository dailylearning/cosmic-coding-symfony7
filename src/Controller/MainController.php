<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {
        $starshipCount = 450;

        $myShip = [
            'name' => 'USS LeafyCruiser (NCC_-0001)',
            'class' => 'Garden',
            'captain' => 'Jean-Lue Pickles',
            'status' => 'Under construction',
        ];

        return $this->render('main/homepage.html.twig', [
            'starshipCount' => $starshipCount,
            'myShip' => $myShip,
        ]);
    }
}
