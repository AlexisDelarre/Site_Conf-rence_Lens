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


        if (0 === strpos($pathinfo, '/conference')) {
            // app_conference_index
            if ('/conference' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\ConferenceController::index',  '_route' => 'app_conference_index',);
            }

            // app_conference_new
            if ('/conference/new' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\ConferenceController::newConference',  '_route' => 'app_conference_new',);
            }

            // app_conference_edit
            if (preg_match('#^/conference/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_conference_edit')), array (  '_controller' => 'App\\Controller\\ConferenceController::editConference',));
            }

            // app_conference_delete
            if (preg_match('#^/conference/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_conference_delete')), array (  '_controller' => 'App\\Controller\\ConferenceController::deleteConference',));
            }

            // app_conference_show
            if (preg_match('#^/conference/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_conference_show')), array (  '_controller' => 'App\\Controller\\ConferenceController::showConference',));
            }

        }

        // app_homepage_index
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\HomepageController::index',  '_route' => 'app_homepage_index',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'app_homepage_index'));
            }

            return $ret;
        }

        // app_homepage_new
        if ('/new' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\HomepageController::newHomepage',  '_route' => 'app_homepage_new',);
        }

        // app_homepage_edit
        if (preg_match('#^/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_homepage_edit')), array (  '_controller' => 'App\\Controller\\HomepageController::editHomepage',));
        }

        // login
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\SecurityController::login',  '_route' => 'login',);
        }

        // logout
        if ('/logout' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\SecurityController::logout',  '_route' => 'logout',);
        }

        if (0 === strpos($pathinfo, '/register')) {
            // register
            if ('/register' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_register;
                }

                return array (  '_controller' => 'App\\Controller\\SecurityController::register',  '_route' => 'register',);
            }
            not_register:

            // check_register
            if ('/register' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_check_register;
                }

                return array (  '_controller' => 'App\\Controller\\SecurityController::check_register',  '_route' => 'check_register',);
            }
            not_check_register:

        }

        // _twig_error_test
        if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
