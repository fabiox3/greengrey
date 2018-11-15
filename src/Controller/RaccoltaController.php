<?php

namespace App\Controller;

use App\Form\RaccoltaFormType;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class RaccoltaController extends AbstractController
{
	private $_density;

    /**
     * @Route("/raccolta", name="raccolta")
     */
    public function index()
    {
    	// Densità dell'olio 0.916 g/cm3
		$this->_density = 0.916; 

    	$form = $this->createForm(RaccoltaFormType::class, null);
        if ($form->isSubmitted() && $form->isValid()) {
        	// do stuff	
            return $this->redirectToRoute('/raccolta');
        }    	

        return $this->render('raccolta/index.html.twig', [
            'username' => (!is_null($this->getUser()))?$this->getUser()->getUsername():null,
            'form' => $form->createView(),
        ]);
    }
}
