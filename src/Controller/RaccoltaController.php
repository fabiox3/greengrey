<?php

namespace App\Controller;

use App\Form\RaccoltaFormType;
use App\Entity\User;
use App\Entity\Raccolta;
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
            'year' => null,
            'annata' => $this->_getYears(),
        ]);
    }

    /**
    * Matches /trees/*
    *
    * @Route("/raccolta/{year}", name="raccoltayear_show")
    */
    public function getDataFromYear($year)
    {
        if( !is_null($year) ) {
            $q = $this->getDoctrine()->getRepository(Raccolta::class);
            $r = $q->findBy(
                [ 'year' => $year ]
            );

            return $this->render('raccolta/index.html.twig', [
                'username' => (!is_null($this->getUser()))?$this->getUser()->getUsername():null,
                'form' => null,
                'resa' => $r,
                'annata' => $this->_getYears(),
            ]);
        }
    }

    private function _getYears()
    {  
        $i = 0;
        for( $y=2018; $y<2100; $y++ ) {
            if( $y <= date('Y') ) {
                $years[$i] = ['annata' => $y];
                $i++;
            }
        }
        return $years;
    }
}
