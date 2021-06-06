<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserVueController extends AbstractController
{
    /**
     * @Route("/", name="user_home")
     */
    public function index(): Response
    {
        return $this->render('user_vue/index.html.twig', [
            'controller_name' => 'UserVueController',
        ]);
    }
}
