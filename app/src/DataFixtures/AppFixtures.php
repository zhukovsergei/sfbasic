<?php

namespace App\DataFixtures;

use App\Factory\BookFactory;
use App\Factory\CategoryFactory;
use App\Factory\UserFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        UserFactory::createOne(['email' => 'opohmelka@fdsgn.ch']);
        UserFactory::createMany(10);


        CategoryFactory::createMany(5);

        BookFactory::createMany(30);

        $manager->flush();
    }
}
