<?php

namespace App\DataFixtures;

use App\Entity\Client;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TechnologyFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $client = new Client();
        $client->setName('Wild Code School');
        $manager->persist($client);

        $client = new Client();
        $client->setName('WiziFarm');
        $manager->persist($client);

        $client = new Client();
        $client->setName('La Pellicule Ensorcelée');
        $manager->persist($client);

        $client = new Client();
        $client->setName('Saint-Ex');
        $manager->persist($client);

        $client = new Client();
        $client->setName('Central Fab');
        $manager->persist($client);

        $manager->flush();
    }
}