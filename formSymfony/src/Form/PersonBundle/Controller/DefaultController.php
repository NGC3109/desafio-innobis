<?php

namespace Form\PersonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FormPersonBundle:Default:index.html.twig', array('name' => $name));
    }
}
