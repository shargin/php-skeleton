<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 *
 * Class HealthController
 * @package App\Controller
 */
class HealthController extends AbstractController
{
    /**
     * @Route("/health", methods={"GET"})
     * @return JsonResponse
     */
    public function health(): JsonResponse
    {
        return $this->json([
            "status" => "OK",
            "hostname" => gethostname()
        ]);
    }
}