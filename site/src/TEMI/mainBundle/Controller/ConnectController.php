<?php
/**
 * Created by PhpStorm.
 * User: matthias
 * Date: 14/06/2018
 * Time: 13:50
 */
namespace TEMI\mainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class ConnectController extends Controller
{
    public function connectionAction()
    {
        return new Response($this->get('templating')->render('TEMImainBundle:Connection:connection.html.twig'));
    }
    public function inscriptionAction()
    {
        return new Response($this->get('templating')->render('TEMImainBundle:Connection:inscription.html.twig'));
    }
    public function connectionStartedAction(Request $request){
        $session=$request->getSession();
        $session->set('user_conected',true);
    }
}