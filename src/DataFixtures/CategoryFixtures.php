<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $category = new Category();
        $category->setName('Développement Web');
        $manager->persist($category);

        $category = new Category();
        $category->setName('Identité Visuelle');
        $manager->persist($category);

        $category = new Category();
        $category->setName('Communication Print');
        $manager->persist($category);

        $category = new Category();
        $category->setName('Design Graphique');
        $manager->persist($category);

        $category = new Category();
        $category->setName('Branding');
        $manager->persist($category);

        $manager->flush();
    }
}