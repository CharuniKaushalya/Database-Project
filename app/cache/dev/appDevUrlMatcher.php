<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
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

        // application_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'application_homepage');
            }

            return array (  '_controller' => 'ApplicationBundle\\Controller\\DefaultController::indexAction',  '_route' => 'application_homepage',);
        }

        if (0 === strpos($pathinfo, '/applicant1')) {
            // applicant_index
            if (rtrim($pathinfo, '/') === '/applicant1') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_applicant_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'applicant_index');
                }

                return array (  '_controller' => 'ApplicationBundle\\Controller\\ApplicantController::indexAction',  '_route' => 'applicant_index',);
            }
            not_applicant_index:

            // applicant_show
            if (preg_match('#^/applicant1/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_applicant_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'applicant_show')), array (  '_controller' => 'ApplicationBundle\\Controller\\ApplicantController::showAction',));
            }
            not_applicant_show:

            // applicant_new
            if ($pathinfo === '/applicant1/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_applicant_new;
                }

                return array (  '_controller' => 'ApplicationBundle\\Controller\\ApplicantController::newAction',  '_route' => 'applicant_new',);
            }
            not_applicant_new:

            // applicant_edit
            if (preg_match('#^/applicant1/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_applicant_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'applicant_edit')), array (  '_controller' => 'ApplicationBundle\\Controller\\ApplicantController::editAction',));
            }
            not_applicant_edit:

            // applicant_delete
            if (preg_match('#^/applicant1/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_applicant_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'applicant_delete')), array (  '_controller' => 'ApplicationBundle\\Controller\\ApplicantController::deleteAction',));
            }
            not_applicant_delete:

            // applicant_preferrence
            if (preg_match('#^/applicant1/(?P<id>[^/]++)/preferrence$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_applicant_preferrence;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'applicant_preferrence')), array (  '_controller' => 'ApplicationBundle\\Controller\\ApplicantController::preffAction',));
            }
            not_applicant_preferrence:

        }

        if (0 === strpos($pathinfo, '/child')) {
            // child_index
            if (rtrim($pathinfo, '/') === '/child') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_child_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'child_index');
                }

                return array (  '_controller' => 'ApplicationBundle\\Controller\\ChildController::indexAction',  '_route' => 'child_index',);
            }
            not_child_index:

            // child_show
            if (preg_match('#^/child/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_child_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'child_show')), array (  '_controller' => 'ApplicationBundle\\Controller\\ChildController::showAction',));
            }
            not_child_show:

            // child_new
            if ($pathinfo === '/child/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_child_new;
                }

                return array (  '_controller' => 'ApplicationBundle\\Controller\\ChildController::newAction',  '_route' => 'child_new',);
            }
            not_child_new:

            // child_edit
            if (preg_match('#^/child/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_child_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'child_edit')), array (  '_controller' => 'ApplicationBundle\\Controller\\ChildController::editAction',));
            }
            not_child_edit:

            // child_delete
            if (preg_match('#^/child/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_child_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'child_delete')), array (  '_controller' => 'ApplicationBundle\\Controller\\ChildController::deleteAction',));
            }
            not_child_delete:

            // applicant_child_show
            if (preg_match('#^/child/(?P<id>[^/]++)/show_app_child$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_applicant_child_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'applicant_child_show')), array (  '_controller' => 'ApplicationBundle\\Controller\\ChildController::showACAction',));
            }
            not_applicant_child_show:

        }

        if (0 === strpos($pathinfo, '/school')) {
            // school_index
            if (rtrim($pathinfo, '/') === '/school') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_school_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'school_index');
                }

                return array (  '_controller' => 'ApplicationBundle\\Controller\\SchoolController::indexAction',  '_route' => 'school_index',);
            }
            not_school_index:

            // school_show
            if (preg_match('#^/school/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_school_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'school_show')), array (  '_controller' => 'ApplicationBundle\\Controller\\SchoolController::showAction',));
            }
            not_school_show:

            // school_new
            if ($pathinfo === '/school/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_school_new;
                }

                return array (  '_controller' => 'ApplicationBundle\\Controller\\SchoolController::newAction',  '_route' => 'school_new',);
            }
            not_school_new:

            // school_edit
            if (preg_match('#^/school/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_school_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'school_edit')), array (  '_controller' => 'ApplicationBundle\\Controller\\SchoolController::editAction',));
            }
            not_school_edit:

            // school_delete
            if (preg_match('#^/school/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_school_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'school_delete')), array (  '_controller' => 'ApplicationBundle\\Controller\\SchoolController::deleteAction',));
            }
            not_school_delete:

        }

        if (0 === strpos($pathinfo, '/childOf')) {
            if (0 === strpos($pathinfo, '/childOfStaff')) {
                // childrenofstaff_index
                if (rtrim($pathinfo, '/') === '/childOfStaff') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_childrenofstaff_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'childrenofstaff_index');
                    }

                    return array (  '_controller' => 'ApplicationBundle\\Controller\\ChildrenOfStaffController::indexAction',  '_route' => 'childrenofstaff_index',);
                }
                not_childrenofstaff_index:

                // childrenofstaff_show
                if (preg_match('#^/childOfStaff/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_childrenofstaff_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'childrenofstaff_show')), array (  '_controller' => 'ApplicationBundle\\Controller\\ChildrenOfStaffController::showAction',));
                }
                not_childrenofstaff_show:

                // childrenofstaff_new
                if ($pathinfo === '/childOfStaff/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_childrenofstaff_new;
                    }

                    return array (  '_controller' => 'ApplicationBundle\\Controller\\ChildrenOfStaffController::newAction',  '_route' => 'childrenofstaff_new',);
                }
                not_childrenofstaff_new:

                // childrenofstaff_edit
                if (preg_match('#^/childOfStaff/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_childrenofstaff_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'childrenofstaff_edit')), array (  '_controller' => 'ApplicationBundle\\Controller\\ChildrenOfStaffController::editAction',));
                }
                not_childrenofstaff_edit:

                // childrenofstaff_delete
                if (preg_match('#^/childOfStaff/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_childrenofstaff_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'childrenofstaff_delete')), array (  '_controller' => 'ApplicationBundle\\Controller\\ChildrenOfStaffController::deleteAction',));
                }
                not_childrenofstaff_delete:

            }

            if (0 === strpos($pathinfo, '/childOfOteoes')) {
                // childrenofotoeos_index
                if (rtrim($pathinfo, '/') === '/childOfOteoes') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_childrenofotoeos_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'childrenofotoeos_index');
                    }

                    return array (  '_controller' => 'ApplicationBundle\\Controller\\ChildrenOfOtoeosController::indexAction',  '_route' => 'childrenofotoeos_index',);
                }
                not_childrenofotoeos_index:

                // childrenofotoeos_show
                if (preg_match('#^/childOfOteoes/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_childrenofotoeos_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'childrenofotoeos_show')), array (  '_controller' => 'ApplicationBundle\\Controller\\ChildrenOfOtoeosController::showAction',));
                }
                not_childrenofotoeos_show:

                // childrenofotoeos_new
                if ($pathinfo === '/childOfOteoes/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_childrenofotoeos_new;
                    }

                    return array (  '_controller' => 'ApplicationBundle\\Controller\\ChildrenOfOtoeosController::newAction',  '_route' => 'childrenofotoeos_new',);
                }
                not_childrenofotoeos_new:

                // childrenofotoeos_edit
                if (preg_match('#^/childOfOteoes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_childrenofotoeos_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'childrenofotoeos_edit')), array (  '_controller' => 'ApplicationBundle\\Controller\\ChildrenOfOtoeosController::editAction',));
                }
                not_childrenofotoeos_edit:

                // childrenofotoeos_delete
                if (preg_match('#^/childOfOteoes/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_childrenofotoeos_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'childrenofotoeos_delete')), array (  '_controller' => 'ApplicationBundle\\Controller\\ChildrenOfOtoeosController::deleteAction',));
                }
                not_childrenofotoeos_delete:

            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            // user_index
            if (rtrim($pathinfo, '/') === '/user') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user_index');
                }

                return array (  '_controller' => 'ApplicationBundle\\Controller\\UserController::indexAction',  '_route' => 'user_index',);
            }
            not_user_index:

            // user_show
            if (preg_match('#^/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'ApplicationBundle\\Controller\\UserController::showAction',));
            }
            not_user_show:

            // user_new
            if ($pathinfo === '/user/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_new;
                }

                return array (  '_controller' => 'ApplicationBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
            }
            not_user_new:

            // user_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'ApplicationBundle\\Controller\\UserController::editAction',));
            }
            not_user_edit:

            // user_delete
            if (preg_match('#^/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'ApplicationBundle\\Controller\\UserController::deleteAction',));
            }
            not_user_delete:

            if (0 === strpos($pathinfo, '/user/log')) {
                // user_login
                if ($pathinfo === '/user/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_user_login;
                    }

                    return array (  '_controller' => 'ApplicationBundle\\Controller\\UserController::loginAction',  '_route' => 'user_login',);
                }
                not_user_login:

                // loggout
                if ($pathinfo === '/user/loggout') {
                    return array (  '_controller' => 'ApplicationBundle\\Controller\\UserController::logoutAction',  '_route' => 'loggout',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/role')) {
            // role_index
            if (rtrim($pathinfo, '/') === '/role') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_role_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'role_index');
                }

                return array (  '_controller' => 'ApplicationBundle\\Controller\\RoleController::indexAction',  '_route' => 'role_index',);
            }
            not_role_index:

            // role_show
            if (preg_match('#^/role/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_role_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'role_show')), array (  '_controller' => 'ApplicationBundle\\Controller\\RoleController::showAction',));
            }
            not_role_show:

            // role_new
            if ($pathinfo === '/role/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_role_new;
                }

                return array (  '_controller' => 'ApplicationBundle\\Controller\\RoleController::newAction',  '_route' => 'role_new',);
            }
            not_role_new:

            // role_edit
            if (preg_match('#^/role/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_role_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'role_edit')), array (  '_controller' => 'ApplicationBundle\\Controller\\RoleController::editAction',));
            }
            not_role_edit:

            // role_delete
            if (preg_match('#^/role/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_role_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'role_delete')), array (  '_controller' => 'ApplicationBundle\\Controller\\RoleController::deleteAction',));
            }
            not_role_delete:

        }

        // applicant_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'applicant_homepage');
            }

            return array (  '_controller' => 'ApplicantBundle\\Controller\\DefaultController::indexAction',  '_route' => 'applicant_homepage',);
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
