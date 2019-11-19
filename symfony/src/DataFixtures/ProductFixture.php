<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Product;

class ProductFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $product = new Product();
        $product->setTitle('Monitor LG IPS-147');
        $product->setPrice(155);
        $product->setDescription('Monitor LG IPS-147 description');
        
        $manager->persist($product);
        $manager->flush();
    }
}
