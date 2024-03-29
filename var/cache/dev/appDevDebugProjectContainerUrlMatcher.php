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

        // 
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', '');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => '',);
        }

        // Envio
        if ('/enviar' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::sendEmail',  '_route' => 'Envio',);
        }

        if (0 === strpos($pathinfo, '/estadopedido')) {
            // estadopedido_index
            if ('/estadopedido' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_estadopedido_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'estadopedido_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\EstadopedidoController::indexAction',  '_route' => 'estadopedido_index',);
            }
            not_estadopedido_index:

            // estadopedido_show
            if (preg_match('#^/estadopedido/(?P<idestadopedido>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_estadopedido_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estadopedido_show')), array (  '_controller' => 'AppBundle\\Controller\\EstadopedidoController::showAction',));
            }
            not_estadopedido_show:

            // estadopedido_new
            if ('/estadopedido/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_estadopedido_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\EstadopedidoController::newAction',  '_route' => 'estadopedido_new',);
            }
            not_estadopedido_new:

            // estadopedido_edit
            if (preg_match('#^/estadopedido/(?P<idestadopedido>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_estadopedido_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estadopedido_edit')), array (  '_controller' => 'AppBundle\\Controller\\EstadopedidoController::editAction',));
            }
            not_estadopedido_edit:

            // estadopedido_delete
            if (preg_match('#^/estadopedido/(?P<idestadopedido>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_estadopedido_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'estadopedido_delete')), array (  '_controller' => 'AppBundle\\Controller\\EstadopedidoController::deleteAction',));
            }
            not_estadopedido_delete:

        }

        elseif (0 === strpos($pathinfo, '/cliente')) {
            // cliente_index
            if ('/cliente' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_cliente_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'cliente_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ClienteController::indexAction',  '_route' => 'cliente_index',);
            }
            not_cliente_index:

            // cliente_show
            if (preg_match('#^/cliente/(?P<idcliente>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_cliente_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cliente_show')), array (  '_controller' => 'AppBundle\\Controller\\ClienteController::showAction',));
            }
            not_cliente_show:

            // cliente_new
            if ('/cliente/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_cliente_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ClienteController::newAction',  '_route' => 'cliente_new',);
            }
            not_cliente_new:

            // cliente_edit
            if (preg_match('#^/cliente/(?P<idcliente>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_cliente_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cliente_edit')), array (  '_controller' => 'AppBundle\\Controller\\ClienteController::editAction',));
            }
            not_cliente_edit:

            // cliente_delete
            if (preg_match('#^/cliente/(?P<idcliente>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_cliente_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cliente_delete')), array (  '_controller' => 'AppBundle\\Controller\\ClienteController::deleteAction',));
            }
            not_cliente_delete:

        }

        elseif (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/pedido')) {
                // pedido_index
                if ('/pedido' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_pedido_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'pedido_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\PedidoController::indexAction',  '_route' => 'pedido_index',);
                }
                not_pedido_index:

                // pedido_show
                if (preg_match('#^/pedido/(?P<idpedido>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_pedido_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pedido_show')), array (  '_controller' => 'AppBundle\\Controller\\PedidoController::showAction',));
                }
                not_pedido_show:

                // pedido_new
                if ('/pedido/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_pedido_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\PedidoController::newAction',  '_route' => 'pedido_new',);
                }
                not_pedido_new:

                // pedido_edit
                if (preg_match('#^/pedido/(?P<idpedido>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_pedido_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pedido_edit')), array (  '_controller' => 'AppBundle\\Controller\\PedidoController::editAction',));
                }
                not_pedido_edit:

                // pedido_delete
                if (preg_match('#^/pedido/(?P<idpedido>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_pedido_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pedido_delete')), array (  '_controller' => 'AppBundle\\Controller\\PedidoController::deleteAction',));
                }
                not_pedido_delete:

            }

            elseif (0 === strpos($pathinfo, '/pizza')) {
                // pizza_index
                if ('/pizza' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_pizza_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'pizza_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\PizzaController::indexAction',  '_route' => 'pizza_index',);
                }
                not_pizza_index:

                // pizza_show
                if (preg_match('#^/pizza/(?P<idpizza>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_pizza_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pizza_show')), array (  '_controller' => 'AppBundle\\Controller\\PizzaController::showAction',));
                }
                not_pizza_show:

                // pizza_new
                if ('/pizza/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_pizza_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\PizzaController::newAction',  '_route' => 'pizza_new',);
                }
                not_pizza_new:

                // pizza_edit
                if (preg_match('#^/pizza/(?P<idpizza>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_pizza_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pizza_edit')), array (  '_controller' => 'AppBundle\\Controller\\PizzaController::editAction',));
                }
                not_pizza_edit:

                // pizza_delete
                if (preg_match('#^/pizza/(?P<idpizza>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_pizza_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pizza_delete')), array (  '_controller' => 'AppBundle\\Controller\\PizzaController::deleteAction',));
                }
                not_pizza_delete:

                // pizza_inicio
                if ('/pizza' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_pizza_inicio;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'pizza_inicio');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'pizza_inicio',);
                }
                not_pizza_inicio:

                if (0 === strpos($pathinfo, '/pizzapedido')) {
                    // pizzapedido_index
                    if ('/pizzapedido' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_pizzapedido_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($rawPathinfo.'/', 'pizzapedido_index');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\PizzapedidoController::indexAction',  '_route' => 'pizzapedido_index',);
                    }
                    not_pizzapedido_index:

                    // pizzapedido_show
                    if (preg_match('#^/pizzapedido/(?P<idpizzapedido>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_pizzapedido_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pizzapedido_show')), array (  '_controller' => 'AppBundle\\Controller\\PizzapedidoController::showAction',));
                    }
                    not_pizzapedido_show:

                    // pizzapedido_new
                    if ('/pizzapedido/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_pizzapedido_new;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\PizzapedidoController::newAction',  '_route' => 'pizzapedido_new',);
                    }
                    not_pizzapedido_new:

                    // pizzapedido_edit
                    if (preg_match('#^/pizzapedido/(?P<idpizzapedido>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_pizzapedido_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pizzapedido_edit')), array (  '_controller' => 'AppBundle\\Controller\\PizzapedidoController::editAction',));
                    }
                    not_pizzapedido_edit:

                    // pizzapedido_delete
                    if (preg_match('#^/pizzapedido/(?P<idpizza>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_pizzapedido_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pizzapedido_delete')), array (  '_controller' => 'AppBundle\\Controller\\PizzapedidoController::deletePizzaArrayAction',));
                    }
                    not_pizzapedido_delete:

                    // pizzapedido_agregar_pizza
                    if (preg_match('#^/pizzapedido/(?P<idpizza>[^/]++)/agregarpizza$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('POST', 'GET'))) {
                            $allow = array_merge($allow, array('POST', 'GET'));
                            goto not_pizzapedido_agregar_pizza;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pizzapedido_agregar_pizza')), array (  '_controller' => 'AppBundle\\Controller\\PizzapedidoController::agregarPizzaArrayAction',));
                    }
                    not_pizzapedido_agregar_pizza:

                    // pizzapedido_confirma
                    if ('/pizzapedido/confirma' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\PizzapedidoController::confirmaPedidoAction',  '_route' => 'pizzapedido_confirma',);
                    }

                    // pizzapedido_cart
                    if ('/pizzapedido/cart' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\PizzapedidoController::verCarritoAction',  '_route' => 'pizzapedido_cart',);
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/profile')) {
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

        }

        elseif (0 === strpos($pathinfo, '/tamanopizza')) {
            // tamanopizza_index
            if ('/tamanopizza' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_tamanopizza_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'tamanopizza_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\TamanopizzaController::indexAction',  '_route' => 'tamanopizza_index',);
            }
            not_tamanopizza_index:

            // tamanopizza_show
            if (preg_match('#^/tamanopizza/(?P<idtamanopizza>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_tamanopizza_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tamanopizza_show')), array (  '_controller' => 'AppBundle\\Controller\\TamanopizzaController::showAction',));
            }
            not_tamanopizza_show:

            // tamanopizza_new
            if ('/tamanopizza/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_tamanopizza_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\TamanopizzaController::newAction',  '_route' => 'tamanopizza_new',);
            }
            not_tamanopizza_new:

            // tamanopizza_edit
            if (preg_match('#^/tamanopizza/(?P<idtamanopizza>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_tamanopizza_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tamanopizza_edit')), array (  '_controller' => 'AppBundle\\Controller\\TamanopizzaController::editAction',));
            }
            not_tamanopizza_edit:

            // tamanopizza_delete
            if (preg_match('#^/tamanopizza/(?P<idtamanopizza>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_tamanopizza_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tamanopizza_delete')), array (  '_controller' => 'AppBundle\\Controller\\TamanopizzaController::deleteAction',));
            }
            not_tamanopizza_delete:

        }

        elseif (0 === strpos($pathinfo, '/login')) {
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

        if (0 === strpos($pathinfo, '/register')) {
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
