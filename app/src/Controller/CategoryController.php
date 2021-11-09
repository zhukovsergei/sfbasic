<?php

namespace App\Controller;

use App\ReadModel\Category\CategoryFetcher;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    #[Route('/category', name: 'category.index')]
    public function login(CategoryFetcher $categoryFetcher): Response
    {
        return $this->json($categoryFetcher->findAll());
    }
}
