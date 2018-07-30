<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = $allowSchemes = array();
        if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
            return $ret;
        }
        if ($allow) {
            throw new MethodNotAllowedException(array_keys($allow));
        }
        if (!in_array($this->context->getMethod(), array('HEAD', 'GET'), true)) {
            // no-op
        } elseif ($allowSchemes) {
            redirect_scheme:
            $scheme = $this->context->getScheme();
            $this->context->setScheme(key($allowSchemes));
            try {
                if ($ret = $this->doMatch($pathinfo)) {
                    return $this->redirect($pathinfo, $ret['_route'], $this->context->getScheme()) + $ret;
                }
            } finally {
                $this->context->setScheme($scheme);
            }
        } elseif ('/' !== $pathinfo) {
            $pathinfo = '/' !== $pathinfo[-1] ? $pathinfo.'/' : substr($pathinfo, 0, -1);
            if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
                return $this->redirect($pathinfo, $ret['_route']) + $ret;
            }
            if ($allowSchemes) {
                goto redirect_scheme;
            }
        }

        throw new ResourceNotFoundException();
    }

    private function doMatch(string $rawPathinfo, array &$allow = array(), array &$allowSchemes = array()): ?array
    {
        $allow = $allowSchemes = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        switch ($pathinfo) {
            default:
                $routes = array(
                    '/account/accueil' => array(array('_route' => 'accueil_account', '_controller' => 'App\\Controller\\AccountController::index'), null, null, null),
                    '/account/ajouter/salle' => array(array('_route' => 'ajouter_salle', '_controller' => 'App\\Controller\\AccountController::ajouterSalle'), null, null, null),
                    '/account/liste/salle' => array(array('_route' => 'liste_salle', '_controller' => 'App\\Controller\\AccountController::listeSalle'), null, null, null),
                    '/account/edit/salle' => array(array('_route' => 'edit_salle', '_controller' => 'App\\Controller\\AccountController::editSalle'), null, null, null),
                    '/account/detail/salle' => array(array('_route' => 'detail_salle', '_controller' => 'App\\Controller\\AccountController::detailSalle'), null, array('POST' => 0, 'GET' => 1), null),
                    '/back/accueil' => array(array('_route' => 'accueil_back', '_controller' => 'App\\Controller\\BackController::index'), null, null, null),
                    '/front/accueil' => array(array('_route' => 'accueil_front', '_controller' => 'App\\Controller\\FrontController::index'), null, null, null),
                    '/front/catalogue' => array(array('_route' => 'catalogue_front', '_controller' => 'App\\Controller\\FrontController::catalogue'), null, array('GET' => 0, 'POST' => 1), null),
                    '/front/partager/salle' => array(array('_route' => 'partager_salle_front', '_controller' => 'App\\Controller\\FrontController::partagerSalle'), null, array('GET' => 0, 'POST' => 1), null),
                    '/register' => array(array('_route' => 'user_registration', '_controller' => 'App\\Controller\\RegistrationController::registerAction'), null, null, null),
                    '/login' => array(array('_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login'), null, null, null),
                    '/authentication' => array(array('_route' => 'user_authentication', '_controller' => 'App\\Controller\\SecurityController::verifUser'), null, array('POST' => 0), null),
                    '/logout' => array(array('_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'), null, null, null),
                    '/after/login' => array(array('_route' => 'after_login', '_controller' => 'App\\Controller\\SecurityController::onAuthenticationSuccess'), null, null, null),
                    '/after/logout' => array(array('_route' => 'after_logout', '_controller' => 'App\\Controller\\SecurityController::onLogoutSuccess'), null, null, null),
                    '/_profiler/' => array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null),
                    '/_profiler/search' => array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null),
                    '/_profiler/search_bar' => array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null),
                    '/_profiler/phpinfo' => array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null),
                    '/_profiler/open' => array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null),
                );

                if (!isset($routes[$pathinfo])) {
                    break;
                }
                list($ret, $requiredHost, $requiredMethods, $requiredSchemes) = $routes[$pathinfo];

                $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                    if ($hasRequiredScheme) {
                        $allow += $requiredMethods;
                    }
                    break;
                }
                if (!$hasRequiredScheme) {
                    $allowSchemes += $requiredSchemes;
                    break;
                }

                return $ret;
        }

        $matchedPathinfo = $pathinfo;
        $regexList = array(
            0 => '{^(?'
                    .'|/front/reserver/([^/]++)(*:31)'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:69)'
                        .'|wdt/([^/]++)(*:88)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:133)'
                                .'|router(*:147)'
                                .'|exception(?'
                                    .'|(*:167)'
                                    .'|\\.css(*:180)'
                                .')'
                            .')'
                            .'|(*:190)'
                        .')'
                    .')'
                .')$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    default:
                        $routes = array(
                            31 => array(array('_route' => 'reserver_salle', '_controller' => 'App\\Controller\\FrontController::reserver'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            69 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null),
                            88 => array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null),
                            133 => array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null),
                            147 => array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null),
                            167 => array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null),
                            180 => array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null),
                            190 => array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null),
                        );

                        list($ret, $vars, $requiredMethods, $requiredSchemes) = $routes[$m];

                        foreach ($vars as $i => $v) {
                            if (isset($matches[1 + $i])) {
                                $ret[$v] = $matches[1 + $i];
                            }
                        }

                        $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                        if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                            if ($hasRequiredScheme) {
                                $allow += $requiredMethods;
                            }
                            break;
                        }
                        if (!$hasRequiredScheme) {
                            $allowSchemes += $requiredSchemes;
                            break;
                        }

                        return $ret;
                }

                if (190 === $m) {
                    break;
                }
                $regex = substr_replace($regex, 'F', $m - $offset, 1 + strlen($m));
                $offset += strlen($m);
            }
        }
        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        return null;
    }
}
