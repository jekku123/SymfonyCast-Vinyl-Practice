<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class SongController extends AbstractController
{
    #[Route('/api/songs/{id<\d+>}', name: 'app_getsong', methods: ['GET'])]
    public function getSong(int $id, LoggerInterface $logger): Response {

        $song = [
            'id' => $id,
            'name' => 'Waterfalls',
            'url' => 'https://symfonycasts.s3.amazonaws.com/sample.mp3',
        ];

        $logger->info('Api response for song: {song}', [
            'song' => $id
        ]);

        return $this->json($song);
    }
}