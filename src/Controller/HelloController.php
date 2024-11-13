<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
   #[Route('/')]
    public function homepage()
    {
        return new Response('Sejam bem vindo <3');
    }
    
    #[Route("/produtos/{itens}")]
    public function show($itens)
    {
        return new Response('Bem vindo melhores produtos '.$itens);
    }

}