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
     * @param AuthenticationUtils $authenticationUtils
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function login(AuthenticationUtils $authenticationUtils)
    {
        dump("par la");
        exit;
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        dump($error);
        exit;

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return new JsonResponse(['OK'], JsonResponse::HTTP_OK);
    }
}
