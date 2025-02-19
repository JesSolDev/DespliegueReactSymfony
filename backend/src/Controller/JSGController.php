<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
class JSGController
{
    #[Route('/api/jsg', name: 'api_jsg')]
    public function index(): Response
    {
        return new JsonResponse('Symfony de Jesus Soler Garcia Responde a la llamada de React');
    }
}