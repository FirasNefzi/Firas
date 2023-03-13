<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    function index()
    {
        dd("votre age est ");
    }
    #[Route('/test2')]
    function test2()
    {
        return $this->render('test/test2.html.twig');
    }
}
