<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
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

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/3295e18')) {
                // _assetic_3295e18
                if ($pathinfo === '/js/3295e18.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3295e18',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_3295e18',);
                }

                if (0 === strpos($pathinfo, '/js/3295e18_')) {
                    // _assetic_3295e18_0
                    if ($pathinfo === '/js/3295e18_bootstrap_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3295e18',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_3295e18_0',);
                    }

                    // _assetic_3295e18_1
                    if ($pathinfo === '/js/3295e18_myjs_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3295e18',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_3295e18_1',);
                    }

                    // _assetic_3295e18_2
                    if ($pathinfo === '/js/3295e18_jquery.bpopup.min_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '3295e18',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_3295e18_2',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/c6ef4e9')) {
                // _assetic_c6ef4e9
                if ($pathinfo === '/js/c6ef4e9.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c6ef4e9',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_c6ef4e9',);
                }

                // _assetic_c6ef4e9_0
                if ($pathinfo === '/js/c6ef4e9_bootstrap_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c6ef4e9',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_c6ef4e9_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/0c1c55b')) {
            // _assetic_0c1c55b
            if ($pathinfo === '/css/0c1c55b.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '0c1c55b',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_0c1c55b',);
            }

            if (0 === strpos($pathinfo, '/css/0c1c55b_bootstrap')) {
                // _assetic_0c1c55b_0
                if ($pathinfo === '/css/0c1c55b_bootstrap_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0c1c55b',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_0c1c55b_0',);
                }

                // _assetic_0c1c55b_1
                if ($pathinfo === '/css/0c1c55b_bootstrap-theme_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0c1c55b',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_0c1c55b_1',);
                }

            }

        }

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

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // questionnaire_questionnaire_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'questionnaire_questionnaire_homepage')), array (  '_controller' => 'questionnaire\\QuestionnaireBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/question')) {
            if (0 === strpos($pathinfo, '/questionnaire')) {
                // questionnaire
                if (rtrim($pathinfo, '/') === '/questionnaire') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'questionnaire');
                    }

                    return array (  '_controller' => 'questionnaire\\QuestionnaireBundle\\Controller\\QuestionnaireController::indexAction',  '_route' => 'questionnaire',);
                }

                // questionnaire_show
                if (preg_match('#^/questionnaire/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'questionnaire_show')), array (  '_controller' => 'questionnaire\\QuestionnaireBundle\\Controller\\QuestionnaireController::showAction',));
                }

                // questionnaire_new
                if ($pathinfo === '/questionnaire/new') {
                    return array (  '_controller' => 'questionnaire\\QuestionnaireBundle\\Controller\\QuestionnaireController::newAction',  '_route' => 'questionnaire_new',);
                }

                // questionnaire_create
                if ($pathinfo === '/questionnaire/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_questionnaire_create;
                    }

                    return array (  '_controller' => 'questionnaire\\QuestionnaireBundle\\Controller\\QuestionnaireController::createAction',  '_route' => 'questionnaire_create',);
                }
                not_questionnaire_create:

                // questionnaire_edit
                if (preg_match('#^/questionnaire/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'questionnaire_edit')), array (  '_controller' => 'questionnaire\\QuestionnaireBundle\\Controller\\QuestionnaireController::editAction',));
                }

                // questionnaire_update
                if (preg_match('#^/questionnaire/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_questionnaire_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'questionnaire_update')), array (  '_controller' => 'questionnaire\\QuestionnaireBundle\\Controller\\QuestionnaireController::updateAction',));
                }
                not_questionnaire_update:

                // questionnaire_delete
                if (preg_match('#^/questionnaire/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_questionnaire_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'questionnaire_delete')), array (  '_controller' => 'questionnaire\\QuestionnaireBundle\\Controller\\QuestionnaireController::deleteAction',));
                }
                not_questionnaire_delete:

            }

            // question
            if (rtrim($pathinfo, '/') === '/question') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'question');
                }

                return array (  '_controller' => 'questionnaire\\QuestionnaireBundle\\Controller\\QuestionController::indexAction',  '_route' => 'question',);
            }

            // question_show
            if (preg_match('#^/question/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'question_show')), array (  '_controller' => 'questionnaire\\QuestionnaireBundle\\Controller\\QuestionController::showAction',));
            }

            // question_new
            if ($pathinfo === '/question/new') {
                return array (  '_controller' => 'questionnaire\\QuestionnaireBundle\\Controller\\QuestionController::newAction',  '_route' => 'question_new',);
            }

            // question_create
            if ($pathinfo === '/question/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_question_create;
                }

                return array (  '_controller' => 'questionnaire\\QuestionnaireBundle\\Controller\\QuestionController::createAction',  '_route' => 'question_create',);
            }
            not_question_create:

            // question_edit
            if (preg_match('#^/question/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'question_edit')), array (  '_controller' => 'questionnaire\\QuestionnaireBundle\\Controller\\QuestionController::editAction',));
            }

            // question_update
            if (preg_match('#^/question/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_question_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'question_update')), array (  '_controller' => 'questionnaire\\QuestionnaireBundle\\Controller\\QuestionController::updateAction',));
            }
            not_question_update:

            // question_delete
            if (preg_match('#^/question/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_question_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'question_delete')), array (  '_controller' => 'questionnaire\\QuestionnaireBundle\\Controller\\QuestionController::deleteAction',));
            }
            not_question_delete:

        }

        if (0 === strpos($pathinfo, '/response')) {
            // response
            if (rtrim($pathinfo, '/') === '/response') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'response');
                }

                return array (  '_controller' => 'questionnaire\\QuestionnaireBundle\\Controller\\ResponseController::indexAction',  '_route' => 'response',);
            }

            // response_show
            if (preg_match('#^/response/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'response_show')), array (  '_controller' => 'questionnaire\\QuestionnaireBundle\\Controller\\ResponseController::showAction',));
            }

            // response_new
            if ($pathinfo === '/response/new') {
                return array (  '_controller' => 'questionnaire\\QuestionnaireBundle\\Controller\\ResponseController::newAction',  '_route' => 'response_new',);
            }

            // response_create
            if ($pathinfo === '/response/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_response_create;
                }

                return array (  '_controller' => 'questionnaire\\QuestionnaireBundle\\Controller\\ResponseController::createAction',  '_route' => 'response_create',);
            }
            not_response_create:

            // response_edit
            if (preg_match('#^/response/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'response_edit')), array (  '_controller' => 'questionnaire\\QuestionnaireBundle\\Controller\\ResponseController::editAction',));
            }

            // response_update
            if (preg_match('#^/response/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_response_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'response_update')), array (  '_controller' => 'questionnaire\\QuestionnaireBundle\\Controller\\ResponseController::updateAction',));
            }
            not_response_update:

            // response_delete
            if (preg_match('#^/response/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_response_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'response_delete')), array (  '_controller' => 'questionnaire\\QuestionnaireBundle\\Controller\\ResponseController::deleteAction',));
            }
            not_response_delete:

        }

        if (0 === strpos($pathinfo, '/call')) {
            if (0 === strpos($pathinfo, '/caller')) {
                // caller
                if (rtrim($pathinfo, '/') === '/caller') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'caller');
                    }

                    return array (  '_controller' => 'questionnaire\\QuestionnaireBundle\\Controller\\CallerController::indexAction',  '_route' => 'caller',);
                }

                // caller_show
                if (preg_match('#^/caller/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'caller_show')), array (  '_controller' => 'questionnaire\\QuestionnaireBundle\\Controller\\CallerController::showAction',));
                }

                // caller_new
                if ($pathinfo === '/caller/new') {
                    return array (  '_controller' => 'questionnaire\\QuestionnaireBundle\\Controller\\CallerController::newAction',  '_route' => 'caller_new',);
                }

                // caller_create
                if ($pathinfo === '/caller/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_caller_create;
                    }

                    return array (  '_controller' => 'questionnaire\\QuestionnaireBundle\\Controller\\CallerController::createAction',  '_route' => 'caller_create',);
                }
                not_caller_create:

                // caller_edit
                if (preg_match('#^/caller/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'caller_edit')), array (  '_controller' => 'questionnaire\\QuestionnaireBundle\\Controller\\CallerController::editAction',));
                }

                // caller_update
                if (preg_match('#^/caller/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_caller_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'caller_update')), array (  '_controller' => 'questionnaire\\QuestionnaireBundle\\Controller\\CallerController::updateAction',));
                }
                not_caller_update:

                // caller_delete
                if (preg_match('#^/caller/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_caller_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'caller_delete')), array (  '_controller' => 'questionnaire\\QuestionnaireBundle\\Controller\\CallerController::deleteAction',));
                }
                not_caller_delete:

            }

            // call
            if (rtrim($pathinfo, '/') === '/call') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'call');
                }

                return array (  '_controller' => 'questionnaire\\QuestionnaireBundle\\Controller\\CallController::indexAction',  '_route' => 'call',);
            }

            // call_show
            if (preg_match('#^/call/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'call_show')), array (  '_controller' => 'questionnaire\\QuestionnaireBundle\\Controller\\CallController::showAction',));
            }

            // call_new
            if ($pathinfo === '/call/new') {
                return array (  '_controller' => 'questionnaire\\QuestionnaireBundle\\Controller\\CallController::newAction',  '_route' => 'call_new',);
            }

            // call_create
            if ($pathinfo === '/call/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_call_create;
                }

                return array (  '_controller' => 'questionnaire\\QuestionnaireBundle\\Controller\\CallController::createAction',  '_route' => 'call_create',);
            }
            not_call_create:

            // call_edit
            if (preg_match('#^/call/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'call_edit')), array (  '_controller' => 'questionnaire\\QuestionnaireBundle\\Controller\\CallController::editAction',));
            }

            // call_update
            if (preg_match('#^/call/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_call_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'call_update')), array (  '_controller' => 'questionnaire\\QuestionnaireBundle\\Controller\\CallController::updateAction',));
            }
            not_call_update:

            // call_delete
            if (preg_match('#^/call/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_call_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'call_delete')), array (  '_controller' => 'questionnaire\\QuestionnaireBundle\\Controller\\CallController::deleteAction',));
            }
            not_call_delete:

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
