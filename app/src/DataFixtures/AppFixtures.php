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


//        $books = BookFactory::createMany(5);

//        CategoryFactory::createOne(['email' => 'opohmelka@fdsgn.ch']);

        CategoryFactory::createMany(5, ['books' => BookFactory::new()->many(0, 10)]);
//        BookFactory::createMany(5, ['category' => BookFactory::new()->many(0, 10)]);


        $manager->flush();
    }
}
