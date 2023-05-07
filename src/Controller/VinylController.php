<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;


class VinylController
{
    #[Route('/')]
    public function homepage(): Response
    {
        return new Response('Title: "PB and Jams"');
    }

    #[Route('/browse/{param}')]
    public function browseOne(string $param = null): Response
    {

        if ($param) {
            $title = 'Genre: ' . u(str_replace('-', ' ', $param))->title(true);
        } else {
            $title = 'All genres';
        }

        return new Response($title);
    }
}
