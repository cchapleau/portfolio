<?php

namespace App\DataFixtures;

use App\Entity\Technology;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TechnologyFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $technology = new Technology();
        $technology->setName('Symfony');
        $manager->persist($technology);

        $technology = new Technology();
        $technology->setName('JavaScript');
        $manager->persist($technology);

        $technology = new Technology();
        $technology->setName('PHP');
        $manager->persist($technology);

        $technology = new Technology();
        $technology->setName('HTML');
        $manager->persist($technology);

        $technology = new Technology();
        $technology->setName('CSS');
        $manager->persist($technology);

        $manager->flush();
    }
}