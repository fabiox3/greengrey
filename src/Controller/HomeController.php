<?php

// src/Controller/HomeController.php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\User\UserInterface;

class HomeController extends AbstractController
{
    /**
    * @Route("/home", name="app_homepage")
    */
    public function indexAction()
    {
        return $this->render('default/index.html.twig', [
            'username' => (!is_null($this->getUser()))?$this->getUser()->getUsername():null,
        ]); 
    }

    /**
    * @Route("")
    * @Route("/")
    */
    public function redirectAction()
    {
        return $this->redirectToRoute('app_login');
    }
}

?>