<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MeteoController extends AbstractController
{
    /**
     * @Route("/meteo", name="meteo")
     */
    public function index()
    {
        return $this->render('meteo/index.html.twig', [
            'username' => (!is_null($this->getUser()))?$this->getUser()->getUsername():null
        ]);
    }
}
