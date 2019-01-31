<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/re')) {
            // jeremy_reduction_homepage
            if ('/reduction' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'Jeremy\\ReductionBundle\\Controller\\DefaultController::indexAction',  '_route' => 'jeremy_reduction_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_jeremy_reduction_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'jeremy_reduction_homepage'));
                }

                return $ret;
            }
            not_jeremy_reduction_homepage:

            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if ('/register' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_fos_user_registration_register;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                    }

                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_registration_register;
                    }

                    return $ret;
                }
                not_fos_user_registration_register:

                // fos_user_registration_check_email
                if ('/register/check-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_fos_user_registration_check_email;
                    }

                    return $ret;
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_fos_user_registration_confirm;
                        }

                        return $ret;
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ('/register/confirmed' === $pathinfo) {
                        $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_fos_user_registration_confirmed;
                        }

                        return $ret;
                    }
                    not_fos_user_registration_confirmed:

                }

            }

            elseif (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ('/resetting/request' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_fos_user_resetting_request;
                    }

                    return $ret;
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $ret;
                }
                not_fos_user_resetting_reset:

                // fos_user_resetting_send_email
                if ('/resetting/send-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_fos_user_resetting_send_email;
                    }

                    return $ret;
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/resetting/check-email' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return $ret;
                }
                not_fos_user_resetting_check_email:

            }

        }

        // jeremy_newsletter_homepage
        if ('/newsletter' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'Jeremy\\NewsletterBundle\\Controller\\DefaultController::indexAction',  '_route' => 'jeremy_newsletter_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_jeremy_newsletter_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'jeremy_newsletter_homepage'));
            }

            return $ret;
        }
        not_jeremy_newsletter_homepage:

        // jeremy_commande_homepage
        if ('/commande' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'Jeremy\\CommandeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'jeremy_commande_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_jeremy_commande_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'jeremy_commande_homepage'));
            }

            return $ret;
        }
        not_jeremy_commande_homepage:

        // jeremy_panier_homepage
        if ('/panier' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'Jeremy\\PanierBundle\\Controller\\DefaultController::indexAction',  '_route' => 'jeremy_panier_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_jeremy_panier_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'jeremy_panier_homepage'));
            }

            return $ret;
        }
        not_jeremy_panier_homepage:

        if (0 === strpos($pathinfo, '/pro')) {
            // jeremy_produit_homepage
            if ('/produit' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'Jeremy\\ProduitBundle\\Controller\\DefaultController::indexAction',  '_route' => 'jeremy_produit_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_jeremy_produit_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'jeremy_produit_homepage'));
                }

                return $ret;
            }
            not_jeremy_produit_homepage:

            if (0 === strpos($pathinfo, '/produit/action=')) {
                // jeremy_produit_ajouter
                if ('/produit/action=ajouter' === $pathinfo) {
                    return array (  '_controller' => 'Jeremy\\ProduitBundle\\Controller\\DefaultController::ajouterAction',  '_route' => 'jeremy_produit_ajouter',);
                }

                // jeremy_produit_modifier
                if (0 === strpos($pathinfo, '/produit/action=modif') && preg_match('#^/produit/action\\=modif(?P<id_du_produit>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'jeremy_produit_modifier')), array (  '_controller' => 'Jeremy\\ProduitBundle\\Controller\\DefaultController::modifierProduitAction',));
                }

                // jeremy_produit_supprimer
                if (0 === strpos($pathinfo, '/produit/action=suppr') && preg_match('#^/produit/action\\=suppr(?P<id_du_produit>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'jeremy_produit_supprimer')), array (  '_controller' => 'Jeremy\\ProduitBundle\\Controller\\DefaultController::supprimerProduitAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/profile')) {
                // fos_user_profile_show
                if ('/profile' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_fos_user_profile_show;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                    }

                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_fos_user_profile_show;
                    }

                    return $ret;
                }
                not_fos_user_profile_show:

                // fos_user_profile_edit
                if ('/profile/edit' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_profile_edit;
                    }

                    return $ret;
                }
                not_fos_user_profile_edit:

                // fos_user_change_password
                if ('/profile/change-password' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_change_password;
                    }

                    return $ret;
                }
                not_fos_user_change_password:

            }

        }

        // jeremy_avis_homepage
        if ('/avis' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'Jeremy\\AvisBundle\\Controller\\DefaultController::indexAction',  '_route' => 'jeremy_avis_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_jeremy_avis_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'jeremy_avis_homepage'));
            }

            return $ret;
        }
        not_jeremy_avis_homepage:

        if (0 === strpos($pathinfo, '/log')) {
            // jeremy_user_homepage
            if ('/log' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'Jeremy\\UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'jeremy_user_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_jeremy_user_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'jeremy_user_homepage'));
                }

                return $ret;
            }
            not_jeremy_user_homepage:

            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ('/login' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_security_login;
                    }

                    return $ret;
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ('/login_check' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_fos_user_security_check;
                    }

                    return $ret;
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ('/logout' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_logout;
                }

                return $ret;
            }
            not_fos_user_security_logout:

        }

        // jeremy_front_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'Jeremy\\FrontBundle\\Controller\\DefaultController::indexAction',  '_route' => 'jeremy_front_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_jeremy_front_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'jeremy_front_homepage'));
            }

            return $ret;
        }
        not_jeremy_front_homepage:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
