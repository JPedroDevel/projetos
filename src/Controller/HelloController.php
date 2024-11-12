<?php

    namespace App\Controller;
    
    use Symfony\Component\HttpFoundation\Response;
    
    class HelloController 
    {
        /**
         * @Route("/path")
         */
        public function index(): Response
        {
           return new Response ("Hello Word");
        }
    }

?>