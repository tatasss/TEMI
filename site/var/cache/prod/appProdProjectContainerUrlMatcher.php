<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // hello_the_world
        if ('/hello-world' === $pathinfo) {
            return array (  '_controller' => 'TEMI\\mainBundle\\Controller\\AdvertController::indexAction',  '_route' => 'hello_the_world',);
        }

        // bye_the_world
        if ('/bye' === $pathinfo) {
            return array (  '_controller' => 'TEMI\\mainBundle\\Controller\\AdvertController::byeAction',  '_route' => 'bye_the_world',);
        }

        // temi_platform_home
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'temi_platform_home');
            }

            return array (  '_controller' => 'TEMI\\mainBundle\\Controller\\TemiController::indexAction',  '_route' => 'temi_platform_home',);
        }

        // temi_platform_modele
        if ('/Modele' === $pathinfo) {
            return array (  '_controller' => 'TEMI\\mainBundle\\Controller\\TemiController::modeleAction',  '_route' => 'temi_platform_modele',);
        }

        // temi_platform_add
        if ('/ajoutPays' === $pathinfo) {
            return array (  '_controller' => 'TEMI\\mainBundle\\Controller\\TemiController::ajoutPaysAction',  '_route' => 'temi_platform_add',);
        }

        // temi_platform_graph
        if ('/graph' === $pathinfo) {
            return array (  '_controller' => 'TEMI\\mainBundle\\Controller\\TemiController::graphAction',  '_route' => 'temi_platform_graph',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
