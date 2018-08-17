<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;



class SecurityController extends AbstractController
{

    /**
     * @Route("/login", name="login", methods="POST")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function login()
    {
        return new JsonResponse(['OK'], JsonResponse::HTTP_OK);
    }
}
