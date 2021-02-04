<?php

namespace App\DataFixtures;

use App\Entity\Project;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProjectFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $project = new Project();
        $project->setName('Nom du projet');
        $project->setDate(new \DateTime('06-04-2021 12:00'));
        $project->setResume('Résumé projet');
        $project->setTitle('Titre projet');
        $project->setContent('Content projet');
        $project->setSlug('slug-projet');
        $project->addCategory($this->getReference('category_dev'));
        $project->setClient($this->getReference('client_wild'));
        $project->addTechnology($this->getReference('techno_php'));
        $manager->persist($project);

        $manager->flush();
    }
}