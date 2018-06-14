<?php
/**
 * Created by PhpStorm.
 * User: matthias
 * Date: 13/06/2018
 * Time: 08:53
 */

namespace TEMI\mainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class AdvertController extends Controller
{
    public function indexAction(Request $request){
        $request->getSession()->set("path","/");
        return new Response($this->get('templating')->render('TEMImainBundle:Advert:index.html.twig'));
    }
    public function byeAction(){
        return new Response($this->get('templating')->render('TEMImainBundle:Advert:byebye.html.twig'));
    }

}