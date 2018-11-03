<?php

// src/Controller/TreesController.php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TreesController extends AbstractController
{
	/**
	* @Route("/trees")
	*/
	public function treesList()
	{
        return $this->render('trees/list.html.twig', []);
	}

	/**
     * Matches /trees/*
     *
     * @Route("/trees/{cod}", name="tree_show")
     */
    public function showTree($cod)
    {
    	return $this->render('trees/t.html.twig', [
    		'codice' => $cod,
    	]);
    }	
}

?>