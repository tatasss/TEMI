<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/js')) {
            // _assetic_b86f587
            if ('/js/b86f587.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b86f587',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_b86f587',);
            }

            if (0 === strpos($pathinfo, '/js/b86f587_')) {
                // _assetic_b86f587_0
                if ('/js/b86f587_Chart.min_1.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b86f587',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_b86f587_0',);
                }

                // _assetic_b86f587_1
                if ('/js/b86f587_Chart.bundle.min_2.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b86f587',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_b86f587_1',);
                }

                // _assetic_b86f587_2
                if ('/js/b86f587_excellentexport_3.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b86f587',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_b86f587_2',);
                }

                // _assetic_b86f587_3
                if ('/js/b86f587_XMLRequest_4.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b86f587',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_b86f587_3',);
                }

                // _assetic_b86f587_4
                if ('/js/b86f587_verification_5.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b86f587',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_b86f587_4',);
                }

                if (0 === strpos($pathinfo, '/js/b86f587_m')) {
                    // _assetic_b86f587_5
                    if ('/js/b86f587_myMath_6.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b86f587',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_b86f587_5',);
                    }

                    // _assetic_b86f587_8
                    if ('/js/b86f587_manufact_9.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b86f587',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_b86f587_8',);
                    }

                    // _assetic_b86f587_9
                    if ('/js/b86f587_modelManager_10.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b86f587',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_b86f587_9',);
                    }

                    // _assetic_b86f587_10
                    if ('/js/b86f587_model_11.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b86f587',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_b86f587_10',);
                    }

                }

                // _assetic_b86f587_6
                if ('/js/b86f587_Ref_7.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b86f587',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_b86f587_6',);
                }

                // _assetic_b86f587_7
                if ('/js/b86f587_bootstrapView_8.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b86f587',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_b86f587_7',);
                }

                // _assetic_b86f587_11
                if ('/js/b86f587_graphGenerator_12.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b86f587',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_b86f587_11',);
                }

                // _assetic_b86f587_16
                if ('/js/b86f587_graphFormView_17.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b86f587',  'pos' => 16,  '_format' => 'js',  '_route' => '_assetic_b86f587_16',);
                }

                // _assetic_b86f587_12
                if ('/js/b86f587_ViewGenerator_13.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b86f587',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_b86f587_12',);
                }

                // _assetic_b86f587_13
                if ('/js/b86f587_data_14.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b86f587',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_b86f587_13',);
                }

                // _assetic_b86f587_14
                if ('/js/b86f587_PaysListe_15.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b86f587',  'pos' => 14,  '_format' => 'js',  '_route' => '_assetic_b86f587_14',);
                }

                // _assetic_b86f587_15
                if ('/js/b86f587_script_16.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b86f587',  'pos' => 15,  '_format' => 'js',  '_route' => '_assetic_b86f587_15',);
                }

            }

            // _assetic_5300c02
            if ('/js/5300c02.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '5300c02',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_5300c02',);
            }

            if (0 === strpos($pathinfo, '/js/5300c02_')) {
                // _assetic_5300c02_0
                if ('/js/5300c02_index_1.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5300c02',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_5300c02_0',);
                }

                // _assetic_5300c02_1
                if ('/js/5300c02_XMLRequest_2.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5300c02',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_5300c02_1',);
                }

                // _assetic_5300c02_2
                if ('/js/5300c02_verification_3.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5300c02',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_5300c02_2',);
                }

                if (0 === strpos($pathinfo, '/js/5300c02_m')) {
                    // _assetic_5300c02_3
                    if ('/js/5300c02_myMath_4.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '5300c02',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_5300c02_3',);
                    }

                    // _assetic_5300c02_6
                    if ('/js/5300c02_manufact_7.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '5300c02',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_5300c02_6',);
                    }

                    // _assetic_5300c02_8
                    if ('/js/5300c02_modelManager_9.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '5300c02',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_5300c02_8',);
                    }

                    // _assetic_5300c02_9
                    if ('/js/5300c02_model_10.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '5300c02',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_5300c02_9',);
                    }

                }

                // _assetic_5300c02_4
                if ('/js/5300c02_Ref_5.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5300c02',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_5300c02_4',);
                }

                // _assetic_5300c02_5
                if ('/js/5300c02_bootstrapView_6.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5300c02',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_5300c02_5',);
                }

                // _assetic_5300c02_7
                if ('/js/5300c02_startingLand_8.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5300c02',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_5300c02_7',);
                }

                // _assetic_5300c02_14
                if ('/js/5300c02_script_15.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5300c02',  'pos' => 14,  '_format' => 'js',  '_route' => '_assetic_5300c02_14',);
                }

                // _assetic_5300c02_10
                if ('/js/5300c02_graphGenerator_11.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5300c02',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_5300c02_10',);
                }

                // _assetic_5300c02_11
                if ('/js/5300c02_ViewGenerator_12.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5300c02',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_5300c02_11',);
                }

                // _assetic_5300c02_12
                if ('/js/5300c02_data_13.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5300c02',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_5300c02_12',);
                }

                // _assetic_5300c02_13
                if ('/js/5300c02_PaysListe_14.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5300c02',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_5300c02_13',);
                }

            }

            // _assetic_78afcc5
            if ('/js/78afcc5.js' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '78afcc5',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_78afcc5',);
            }

            if (0 === strpos($pathinfo, '/js/78afcc5_')) {
                // _assetic_78afcc5_0
                if ('/js/78afcc5_XMLRequest_1.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '78afcc5',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_78afcc5_0',);
                }

                // _assetic_78afcc5_1
                if ('/js/78afcc5_verification_2.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '78afcc5',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_78afcc5_1',);
                }

                if (0 === strpos($pathinfo, '/js/78afcc5_m')) {
                    // _assetic_78afcc5_2
                    if ('/js/78afcc5_myMath_3.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '78afcc5',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_78afcc5_2',);
                    }

                    // _assetic_78afcc5_5
                    if ('/js/78afcc5_manufact_6.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '78afcc5',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_78afcc5_5',);
                    }

                    // _assetic_78afcc5_6
                    if ('/js/78afcc5_modelManager_7.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '78afcc5',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_78afcc5_6',);
                    }

                    // _assetic_78afcc5_7
                    if ('/js/78afcc5_model_8.js' === $pathinfo) {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '78afcc5',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_78afcc5_7',);
                    }

                }

                // _assetic_78afcc5_3
                if ('/js/78afcc5_Ref_4.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '78afcc5',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_78afcc5_3',);
                }

                // _assetic_78afcc5_4
                if ('/js/78afcc5_bootstrapView_5.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '78afcc5',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_78afcc5_4',);
                }

                // _assetic_78afcc5_8
                if ('/js/78afcc5_graphGenerator_9.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '78afcc5',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_78afcc5_8',);
                }

                // _assetic_78afcc5_9
                if ('/js/78afcc5_ViewGenerator_10.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '78afcc5',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_78afcc5_9',);
                }

                // _assetic_78afcc5_10
                if ('/js/78afcc5_data_11.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '78afcc5',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_78afcc5_10',);
                }

                // _assetic_78afcc5_11
                if ('/js/78afcc5_PaysListe_12.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '78afcc5',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_78afcc5_11',);
                }

                // _assetic_78afcc5_12
                if ('/js/78afcc5_script_13.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '78afcc5',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_78afcc5_12',);
                }

                // _assetic_78afcc5_13
                if ('/js/78afcc5_ModeleView_14.js' === $pathinfo) {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '78afcc5',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_78afcc5_13',);
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/images')) {
            // _assetic_81953f2
            if ('/images/81953f2.png' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '81953f2',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_81953f2',);
            }

            // _assetic_81953f2_0
            if ('/images/81953f2_logo_CERDI_UCA-01_1.png' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '81953f2',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_81953f2_0',);
            }

            // _assetic_5c63501
            if ('/images/5c63501.png' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '5c63501',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_5c63501',);
            }

            // _assetic_5c63501_0
            if ('/images/5c63501_logo_Calculateur_TEMI_1.png' === $pathinfo) {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '5c63501',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_5c63501_0',);
            }

        }

        // _assetic_c9335ea
        if ('/css/c9335ea.css' === $pathinfo) {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'c9335ea',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_c9335ea',);
        }

        // _assetic_c9335ea_0
        if ('/css/c9335ea_general_1.css' === $pathinfo) {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'c9335ea',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_c9335ea_0',);
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // temi_platform_home
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'temi_platform_home');
            }

            return array (  '_controller' => 'TEMI\\mainBundle\\Controller\\TemiController::indexAction',  '_route' => 'temi_platform_home',);
        }

        // temi_platform_modele
        if ('/modele' === $pathinfo) {
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

        // temi_css_general
        if ('/general' === $pathinfo) {
            return array (  '_controller' => 'TEMI\\mainBundle\\Controller\\JSCSSController::generalCSSAction',  '_route' => 'temi_css_general',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_login;
                }

                return array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_security_check;
                }

                return array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_logout;
            }

            return array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_registration_register;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_registration_check_email;
                }

                return array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirm;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirmed;
                    }

                    return array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
