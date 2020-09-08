<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController
{
    public function index(): JsonResponse
    {
        return new JsonResponse([
            [
                'id' => 1,
                'title' => 'test 1',
                'completed' => false,
            ],
        ], 200, ['Access-Control-Allow-Origin' => '*']);
    }
}

