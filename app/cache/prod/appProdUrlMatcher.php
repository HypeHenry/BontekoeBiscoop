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

        if (0 === strpos($pathinfo, '/cinema')) {
            // cinema
            if (rtrim($pathinfo, '/') === '/cinema') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_cinema;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'cinema');
                }

                return array (  '_controller' => 'Bontekoe\\CinemaBundle\\Controller\\CinemaController::indexAction',  '_route' => 'cinema',);
            }
            not_cinema:

            // cinema_create
            if ($pathinfo === '/cinema/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cinema_create;
                }

                return array (  '_controller' => 'Bontekoe\\CinemaBundle\\Controller\\CinemaController::createAction',  '_route' => 'cinema_create',);
            }
            not_cinema_create:

            // cinema_new
            if ($pathinfo === '/cinema/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_cinema_new;
                }

                return array (  '_controller' => 'Bontekoe\\CinemaBundle\\Controller\\CinemaController::newAction',  '_route' => 'cinema_new',);
            }
            not_cinema_new:

            // cinema_show
            if (preg_match('#^/cinema/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_cinema_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cinema_show')), array (  '_controller' => 'Bontekoe\\CinemaBundle\\Controller\\CinemaController::showAction',));
            }
            not_cinema_show:

            // cinema_edit
            if (preg_match('#^/cinema/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_cinema_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cinema_edit')), array (  '_controller' => 'Bontekoe\\CinemaBundle\\Controller\\CinemaController::editAction',));
            }
            not_cinema_edit:

            // cinema_update
            if (preg_match('#^/cinema/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_cinema_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cinema_update')), array (  '_controller' => 'Bontekoe\\CinemaBundle\\Controller\\CinemaController::updateAction',));
            }
            not_cinema_update:

            // cinema_delete
            if (preg_match('#^/cinema/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_cinema_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cinema_delete')), array (  '_controller' => 'Bontekoe\\CinemaBundle\\Controller\\CinemaController::deleteAction',));
            }
            not_cinema_delete:

        }

        // bontekoe_cinema_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'bontekoe_cinema_default_index')), array (  '_controller' => 'Bontekoe\\CinemaBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/movie')) {
            // movie
            if (rtrim($pathinfo, '/') === '/movie') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_movie;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'movie');
                }

                return array (  '_controller' => 'Bontekoe\\CinemaBundle\\Controller\\MovieController::indexAction',  '_route' => 'movie',);
            }
            not_movie:

            // movie_create
            if ($pathinfo === '/movie/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_movie_create;
                }

                return array (  '_controller' => 'Bontekoe\\CinemaBundle\\Controller\\MovieController::createAction',  '_route' => 'movie_create',);
            }
            not_movie_create:

            // movie_new
            if ($pathinfo === '/movie/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_movie_new;
                }

                return array (  '_controller' => 'Bontekoe\\CinemaBundle\\Controller\\MovieController::newAction',  '_route' => 'movie_new',);
            }
            not_movie_new:

            // movie_show
            if (preg_match('#^/movie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_movie_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'movie_show')), array (  '_controller' => 'Bontekoe\\CinemaBundle\\Controller\\MovieController::showAction',));
            }
            not_movie_show:

            // movie_edit
            if (preg_match('#^/movie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_movie_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'movie_edit')), array (  '_controller' => 'Bontekoe\\CinemaBundle\\Controller\\MovieController::editAction',));
            }
            not_movie_edit:

            // movie_update
            if (preg_match('#^/movie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_movie_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'movie_update')), array (  '_controller' => 'Bontekoe\\CinemaBundle\\Controller\\MovieController::updateAction',));
            }
            not_movie_update:

            // movie_delete
            if (preg_match('#^/movie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_movie_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'movie_delete')), array (  '_controller' => 'Bontekoe\\CinemaBundle\\Controller\\MovieController::deleteAction',));
            }
            not_movie_delete:

        }

        if (0 === strpos($pathinfo, '/reservation')) {
            // reservation
            if (rtrim($pathinfo, '/') === '/reservation') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_reservation;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'reservation');
                }

                return array (  '_controller' => 'Bontekoe\\CinemaBundle\\Controller\\ReservationController::indexAction',  '_route' => 'reservation',);
            }
            not_reservation:

            // reservation_create
            if ($pathinfo === '/reservation/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_reservation_create;
                }

                return array (  '_controller' => 'Bontekoe\\CinemaBundle\\Controller\\ReservationController::createAction',  '_route' => 'reservation_create',);
            }
            not_reservation_create:

            // reservation_new
            if ($pathinfo === '/reservation/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_reservation_new;
                }

                return array (  '_controller' => 'Bontekoe\\CinemaBundle\\Controller\\ReservationController::newAction',  '_route' => 'reservation_new',);
            }
            not_reservation_new:

            // reservation_show
            if (preg_match('#^/reservation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_reservation_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservation_show')), array (  '_controller' => 'Bontekoe\\CinemaBundle\\Controller\\ReservationController::showAction',));
            }
            not_reservation_show:

            // reservation_edit
            if (preg_match('#^/reservation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_reservation_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservation_edit')), array (  '_controller' => 'Bontekoe\\CinemaBundle\\Controller\\ReservationController::editAction',));
            }
            not_reservation_edit:

            // reservation_update
            if (preg_match('#^/reservation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_reservation_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservation_update')), array (  '_controller' => 'Bontekoe\\CinemaBundle\\Controller\\ReservationController::updateAction',));
            }
            not_reservation_update:

            // reservation_delete
            if (preg_match('#^/reservation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_reservation_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservation_delete')), array (  '_controller' => 'Bontekoe\\CinemaBundle\\Controller\\ReservationController::deleteAction',));
            }
            not_reservation_delete:

        }

        if (0 === strpos($pathinfo, '/showschema')) {
            // showschema
            if (rtrim($pathinfo, '/') === '/showschema') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_showschema;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'showschema');
                }

                return array (  '_controller' => 'Bontekoe\\CinemaBundle\\Controller\\ShowschemaController::indexAction',  '_route' => 'showschema',);
            }
            not_showschema:

            // showschema_create
            if ($pathinfo === '/showschema/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_showschema_create;
                }

                return array (  '_controller' => 'Bontekoe\\CinemaBundle\\Controller\\ShowschemaController::createAction',  '_route' => 'showschema_create',);
            }
            not_showschema_create:

            // showschema_new
            if ($pathinfo === '/showschema/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_showschema_new;
                }

                return array (  '_controller' => 'Bontekoe\\CinemaBundle\\Controller\\ShowschemaController::newAction',  '_route' => 'showschema_new',);
            }
            not_showschema_new:

            // showschema_show
            if (preg_match('#^/showschema/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_showschema_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'showschema_show')), array (  '_controller' => 'Bontekoe\\CinemaBundle\\Controller\\ShowschemaController::showAction',));
            }
            not_showschema_show:

            // showschema_edit
            if (preg_match('#^/showschema/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_showschema_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'showschema_edit')), array (  '_controller' => 'Bontekoe\\CinemaBundle\\Controller\\ShowschemaController::editAction',));
            }
            not_showschema_edit:

            // showschema_update
            if (preg_match('#^/showschema/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_showschema_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'showschema_update')), array (  '_controller' => 'Bontekoe\\CinemaBundle\\Controller\\ShowschemaController::updateAction',));
            }
            not_showschema_update:

            // showschema_delete
            if (preg_match('#^/showschema/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_showschema_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'showschema_delete')), array (  '_controller' => 'Bontekoe\\CinemaBundle\\Controller\\ShowschemaController::deleteAction',));
            }
            not_showschema_delete:

        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
