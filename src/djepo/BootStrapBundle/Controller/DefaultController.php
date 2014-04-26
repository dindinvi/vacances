<?php

namespace djepo\BootStrapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('djepoBootStrapBundle:Default:index.html.twig', array('name' => $name));
    }
}
