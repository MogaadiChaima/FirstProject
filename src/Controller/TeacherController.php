<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeacherController extends AbstractController
{
    #[Route('/teacher', name: 'app_teacher')]
    public function showTeacher(): Response
    {
        return $this->render('teacher/index.html.twig', [
            'name' => 'Chaima',
        ]);
    }

    #[Route('/gotoindex', name: 'gotoindex')]
    public function gotoIndex(): Response
    {
        return $this->redirectToRoute('app-student');
    }
}
