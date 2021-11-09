<?php

namespace App\Repository;

use App\Entity\Category\Category;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityNotFoundException;

class CategoryRepository
{
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
        $this->repo = $em->getRepository(Category::class);
    }

    public function add(Category $price): void
    {
        $this->em->persist($price);
    }

    public function get($id): Category
    {
        /** @var Category $price */
        if (!$price = $this->repo->find($id)) {
            throw new EntityNotFoundException('Category is not found.');
        }
        return $price;
    }
}
