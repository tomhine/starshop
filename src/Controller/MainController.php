<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function home(): Response
    {
        $starshipCount = 457;

        $ship = [
            'name' => 'Millennium Falcon',
            'crew' => 5,
            'captain' => 'Han Solo',
            'model' => 'YT-1300',
        ];

        return $this->render('main/home.html.twig', compact('starshipCount', 'ship'));
    }
}
