<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

        // applicant_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'applicant_homepage');
            }

            return array (  '_controller' => 'ApplicantBundle\\Controller\\DefaultController::indexAction',  '_route' => 'applicant_homepage',);
        }

        if (0 === strpos($pathinfo, '/applicant')) {
            // applicant_index
            if (rtrim($pathinfo, '/') === '/applicant') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_applicant_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'applicant_index');
                }

                return array (  '_controller' => 'ApplicantBundle\\Controller\\ApplicantController::indexAction',  '_route' => 'applicant_index',);
            }
            not_applicant_index:

            // applicant_show
            if (preg_match('#^/applicant/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_applicant_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'applicant_show')), array (  '_controller' => 'ApplicantBundle\\Controller\\ApplicantController::showAction',));
            }
            not_applicant_show:

            // applicant_new
            if ($pathinfo === '/applicant/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_applicant_new;
                }

                return array (  '_controller' => 'ApplicantBundle\\Controller\\ApplicantController::newAction',  '_route' => 'applicant_new',);
            }
            not_applicant_new:

            // applicant_edit
            if (preg_match('#^/applicant/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_applicant_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'applicant_edit')), array (  '_controller' => 'ApplicantBundle\\Controller\\ApplicantController::editAction',));
            }
            not_applicant_edit:

            // applicant_delete
            if (preg_match('#^/applicant/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_applicant_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'applicant_delete')), array (  '_controller' => 'ApplicantBundle\\Controller\\ApplicantController::deleteAction',));
            }
            not_applicant_delete:

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
