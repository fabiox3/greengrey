<?php

// src/Controller/TreesController.php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Task;
use App\Entity\Trees;
use App\Form\TaskType;

class TreesController extends AbstractController
{
    private $cod;

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
    public function showTree($cod, Request $request)
    {
        $this->cod = $cod;

        // 1) build the form
        $task = new Task();
        $task->setCode($cod);
        $task->setDate(new \DateTime('now'));
        $task->setUsername($this->getUser()->getUsername());
        $form = $this->createForm(TaskType::class, $task);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($task);
            $entityManager->flush();

            return $this->redirectToRoute('tree_show', ['cod'=>$cod]);
        }        

    	return $this->render('trees/item.html.twig', [
    		'codice'    => $cod,
            'infotree'  => $this->_getInfos(),
            'datatree'  => $this->_getTasks(),
            'form'      => $form->createView(), 
            'username'  => (!is_null($this->getUser()))?$this->getUser()->getUsername():null,
    	]);
    }	

    private function _getInfos()
    {
       $q = $this->getDoctrine()->getRepository(Trees::class); 
       return $q->findOneBy(['code' => $this->cod]);
    }

    private function _getTasks()
    {
        $q = $this->getDoctrine()->getRepository(Task::class);
        return $q->findBy(
            ['code' => $this->cod],
            ['date' => 'DESC']
        );        
    }

    /**
     * Matches /trees/*
     *
     * @Route("/trees/delete/{id}", name="task_delete")
     */
    public function deleteTask($id, Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $task = $entityManager->getRepository(Task::class)->find($id);

        if (!$task) {
            throw $this->createNotFoundException(
                'No task found for id '.$id
            );
        }

        $entityManager->remove($task);
        $entityManager->flush();

        return $this->redirectToRoute('tree_show', ['cod'=>$task->getCode()]);
    }
}

?>