<?php

namespace App\Controller;

use App\Repository\ImageRepository;
use App\Repository\ProjectRepository;
use App\Repository\TechnologyRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProjectController extends AbstractController
{
    /**
     * @Route("/portfolio", name="project")
     */
    public function index(ProjectRepository $projectRepository, ImageRepository $imageRepository, TechnologyRepository $technologyRepository): Response
    {
        return $this->render('project/index.html.twig', [
            'projects' => $projectRepository->findAll(),
            'images' => $imageRepository->findAll(),
            'technologies' => $technologyRepository->findAll(),
        ]);
    }
}
