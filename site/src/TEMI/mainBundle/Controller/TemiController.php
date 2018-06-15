<?php
/**
 * Created by PhpStorm.
 * User: matthias
 * Date: 13/06/2018
 * Time: 10:03
 */
namespace TEMI\mainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class TemiController extends Controller
{
    public function indexAction(){

        return new Response($this->get('templating')->render('TEMImainBundle:Temi:index.html.twig'));
    }
    public function modeleAction()
    {
        return new Response($this->get('templating')->render('TEMImainBundle:Temi:model.html.twig'));
    }
    public function ajoutPaysAction()
    {
        return new Response($this->get('templating')->render('TEMImainBundle:Temi:ajoutPays.html.twig'));
    }
    public function graphAction()
    {
        return new Response($this->get('templating')->render('TEMImainBundle:Temi:graphForm.html.twig'));
    }


}