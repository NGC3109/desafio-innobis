<?php

namespace Form\PersonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Form\PersonBundle\Entity\Person;
use Form\PersonBundle\Form\PersonType;


class PersonController extends Controller
{
    public function indexAction()
    {
        $ps = $this->getDoctrine()->getManager();
        $person = $ps->getRepository('FormPersonBundle:Person')->findAll();

        return  $this->render('FormPersonBundle:Person:index.html.twig', array('persons' => $person));

    }

    public function addAction()
    {
    	$ps = new Person();
    	$form = $this->createCreateForm($ps);

    	return $this->render('FormPersonBundle:Person:encuesta.html.twig', array('form' => $form->createView()));
    }

    private function createCreateForm(Person $entity)
    {
    	$form = $this->createForm(new PersonType(), $entity, array(
    		'action' => $this->generateUrl('form_person_create'),
    		'method' => 'POST'));

    	return $form;
    }

    public function createAction(Request $request)
    {
    	$pers = new Person();
    	$form = $this->createCreateForm($pers);

    	$form->handleRequest($request);

    	if ($form->isValid()) {
    		
    		$out = $this->getDoctrine()->getManager();
    		$out->persist($pers);
    		$out->flush();

    		return $this->redirectToRoute('form_person_index');
    	}

    	return $this->render('FormPersonBundle:Person:encuesta.html.twig', array('form' => $form->createView()));
    }
}
