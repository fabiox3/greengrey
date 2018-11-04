<?php

// src/Controller/TreesController.php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Task;
use App\Entity\Trees;

class TreesController extends AbstractController
{
	/**
	* @Route("/trees")
	*/
	public function treesList()
	{
        return $this->render('trees/map.html.twig', [
            'username' => (!is_null($this->getUser()))?$this->getUser()->getUsername():null
        ]);
	}

	/**
     * Matches /trees/*
     *
     * @Route("/trees/{cod}", name="tree_show")
     */
    public function showTree($cod)
    {
        $q = $this->getDoctrine()->getRepository(Task::class);
        $q1 = $this->getDoctrine()->getRepository(Trees::class);
        $tasks = $q->findBy(
            ['code' => $cod],
            ['date' => 'DESC']
        );
        $tree = $q1->findOneBy(['code' => $cod]);

    	return $this->render('trees/item.html.twig', [
    		'codice' => $cod,
            'infotree'  => $tree,
            'datatree' => $tasks,
            'username' => (!is_null($this->getUser()))?$this->getUser()->getUsername():null,
    	]);
    }	
}

?>