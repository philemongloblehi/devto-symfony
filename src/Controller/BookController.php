<?php

namespace App\Controller;

use App\Service\BookListService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class BookController extends AbstractController
{
    public function index(BookListService $bookListService, SerializerInterface $serializer): JsonResponse {
        $books = $bookListService->get();

        return new JsonResponse(
            $serializer->serialize($books, 'json'),
            200,
            [],
            true
        );
    }
}
