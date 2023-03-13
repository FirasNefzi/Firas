<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalculController extends AbstractController
{
    #[Route('/calcul/calcul2/{a}/{b}', name: 'app_calcul')]
    public function index($a, $b): Response
    {
        $c = $a + $b;
        return $this->render('calcul/calcul2.html.twig', ['a' => $a, 'b' => $b, 'c' => $c]);
    }
}
