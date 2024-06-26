<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{



    #[Route('/user/{slug}', name: 'app_user')]
    public function index($slug, Request $request, UserRepository $repo): Response
    {


        $user = $repo->findOneBy(['slug' => $slug]);

        return $this->render('user/index.html.twig', [
            'user' => $user,
        ]);
    }
}
