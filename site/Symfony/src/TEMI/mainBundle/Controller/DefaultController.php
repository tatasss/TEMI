<?php

namespace TEMI\mainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TEMImainBundle:Default:index.html.twig');
    }
}
