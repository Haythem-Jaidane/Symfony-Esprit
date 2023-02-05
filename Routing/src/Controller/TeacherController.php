<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class TeacherController extends AbstractController
{
    #[Route('/teacher/{name}')]
    public function showTeacher($name)
    {
        return $this->render('teacher/showTeacher.html.twig',['name'=> $name,]);
    }

    #[Route('/tostudent')]
    public function redirectToStudent(){
        return $this->redirectToRoute('welcome_student');
    }
}
