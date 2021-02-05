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
        $project->setName("Reims'Quiz");
        $project->setDate(new \DateTime('09-10-2020 12:00'));
        $project->setResume("Conception d'un quiz sur les thèmes de la ville de Reims et de l'école Wild Code");
        $project->setTitle("Reims'Quiz");
        $project->setContent("Conception d'un quiz sur les thèmes de la ville de Reims et de l'école Wild Code");
        $project->setSlug('reims-quiz');
        $project->addCategory($this->getReference('category_dev'));
        $project->setClient($this->getReference('client_wild'));
        $manager->persist($project);

        $project = new Project();
        $project->setName('REIMSpiration');
        $project->setDate(new \DateTime('27-11-2020 12:00'));
        $project->setResume("Création d'un mur présentant des activités culturelles dans l'aire géographique de la ville de Reims, France et ses environs.");
        $project->setTitle('REIMSpiration');
        $project->setContent("Création d'un mur présentant des activités culturelles dans l'aire géographique de la ville de Reims, France et ses environs.");
        $project->setSlug('reimspiration');
        $project->addCategory($this->getReference('category_dev'));
        $project->setClient($this->getReference('client_pellicule'));
        $manager->persist($project);

        $project = new Project();
        $project->setName('WiziCost');
        $project->setDate(new \DateTime('15-01-2021 12:00'));
        $project->setResume("Hackathon de 52h en partenariat avec l'entreprise WiziFarm, créatrice de solutions numériques pour le domaine agricole, pour réaliser un outil de simulateur d'argus agricole.");
        $project->setTitle('WiziCost');
        $project->setContent("Hackathon de 52h en partenariat avec l'entreprise WiziFarm, créatrice de solutions numériques pour le domaine agricole, pour réaliser un outil de simulateur d'argus agricole.");
        $project->setSlug('wizicost');
        $project->addCategory($this->getReference('category_dev'));
        $project->setClient($this->getReference('client_wizi'));
        $manager->persist($project);

        $manager->flush();
    }
}