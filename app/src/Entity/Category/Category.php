<?php

namespace App\Entity\Category;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="categories")
 */
class Category
{
    /**
     * @ORM\Id
     * @ORM\Column(type="category_id")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;


    public static function create(string $name): self
    {
        $category = new static();
        $category->id = Id::next();
        $category->name = $name;

        return $category;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function setId(Id $id): void
    {
        $this->id = $id;
    }
}