<?php

namespace Irvyne\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('IrvyneMainBundle:Default:index.html.twig', array('name' => $name));
    }
}
