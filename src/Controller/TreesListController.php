<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Trees;

class TreesListController extends AbstractController
{
    /**
     * @Route("/treeslist", name="trees_list")
     */
    public function index()
    {
		$q = $this->getDoctrine()->getRepository(Trees::class);
	    $trees = $q->findAll();

        return $this->render('trees/list.html.twig', [
            'trees' => $trees,
            'username' => (!is_null($this->getUser()))?$this->getUser()->getUsername():null,
        ]);
	}    
}
