<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class QuetionController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('salam oualikopum joyeux anniveraire Marwane');
    }

    /**
     * @Route("/question/{temps}")
     */

     public function show($temps)
     {

             return new Response(sprintf("Bonjour '%s' ", $temps));
     }
}