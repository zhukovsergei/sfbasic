<?php

namespace App\Controller;

use App\ReadModel\Category\BookFetcher;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BookController extends AbstractController
{
    #[Route('/book', name: 'book.index')]
    public function login(BookFetcher $categoryFetcher): Response
    {
        return $this->json($categoryFetcher->findAll());
    }
}
