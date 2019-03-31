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
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

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
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/backoffice=')) {
            if (0 === strpos($pathinfo, '/backoffice=membre')) {
                // jeremy_user_homepage
                if ('/backoffice=membre' === $pathinfo) {
                    return array (  '_controller' => 'Jeremy\\UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'jeremy_user_homepage',);
                }

                // jeremy_user_supprimer
                if (0 === strpos($pathinfo, '/backoffice=membre/action=suppr') && preg_match('#^/backoffice\\=membre/action\\=suppr(?P<id_du_membre>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'jeremy_user_supprimer')), array (  '_controller' => 'Jeremy\\UserBundle\\Controller\\DefaultController::supprimerMembreAction',));
                }

                // jeremy_user_modifier
                if (0 === strpos($pathinfo, '/backoffice=membre/action=modif') && preg_match('#^/backoffice\\=membre/action\\=modif(?P<id_du_membre>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'jeremy_user_modifier')), array (  '_controller' => 'Jeremy\\UserBundle\\Controller\\DefaultController::modifierMembreAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/backoffice=commande')) {
                // jeremy_commande_homepage
                if ('/backoffice=commande' === $pathinfo) {
                    return array (  '_controller' => 'Jeremy\\CommandeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'jeremy_commande_homepage',);
                }

                // jeremy_commande_supprimer
                if (0 === strpos($pathinfo, '/backoffice=commande/action=suppr') && preg_match('#^/backoffice\\=commande/action\\=suppr(?P<id_commande>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'jeremy_commande_supprimer')), array (  '_controller' => 'Jeremy\\CommandeBundle\\Controller\\DefaultController::supprimerCommandeAction',));
                }

                // jeremy_commande_modifier
                if (0 === strpos($pathinfo, '/backoffice=commande/action=modif') && preg_match('#^/backoffice\\=commande/action\\=modif(?P<id_commande>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'jeremy_commande_modifier')), array (  '_controller' => 'Jeremy\\CommandeBundle\\Controller\\DefaultController::modifierCommandeAction',));
                }

            }

            // jeremy_produit_homepage
            if ('/backoffice=produit' === $pathinfo) {
                return array (  '_controller' => 'Jeremy\\ProduitBundle\\Controller\\DefaultController::indexAction',  '_route' => 'jeremy_produit_homepage',);
            }

            if (0 === strpos($pathinfo, '/backoffice=produit/action=')) {
                // jeremy_produit_ajouter
                if ('/backoffice=produit/action=ajouter' === $pathinfo) {
                    return array (  '_controller' => 'Jeremy\\ProduitBundle\\Controller\\DefaultController::ajouterAction',  '_route' => 'jeremy_produit_ajouter',);
                }

                // jeremy_produit_modifier
                if (0 === strpos($pathinfo, '/backoffice=produit/action=modif') && preg_match('#^/backoffice\\=produit/action\\=modif(?P<id_du_produit>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'jeremy_produit_modifier')), array (  '_controller' => 'Jeremy\\ProduitBundle\\Controller\\DefaultController::modifierProduitAction',));
                }

                // jeremy_produit_supprimer
                if (0 === strpos($pathinfo, '/backoffice=produit/action=suppr') && preg_match('#^/backoffice\\=produit/action\\=suppr(?P<id_du_produit>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'jeremy_produit_supprimer')), array (  '_controller' => 'Jeremy\\ProduitBundle\\Controller\\DefaultController::supprimerProduitAction',));
                }

            }

            // jeremy_avis_homepage
            if ('/backoffice=avis' === $pathinfo) {
                return array (  '_controller' => 'Jeremy\\AvisBundle\\Controller\\DefaultController::indexAction',  '_route' => 'jeremy_avis_homepage',);
            }

        }

        // jeremy_front_backoffice
        if ('/backoffice' === $pathinfo) {
            return array (  '_controller' => 'Jeremy\\FrontBundle\\Controller\\DefaultController::backofficeAction',  '_route' => 'jeremy_front_backoffice',);
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

        // jeremy_front_noussommes
        if ('/nous' === $pathinfo) {
            return array (  '_controller' => 'Jeremy\\FrontBundle\\Controller\\DefaultController::nousSommesAction',  '_route' => 'jeremy_front_noussommes',);
        }

        if (0 === strpos($pathinfo, '/panier')) {
            if (0 === strpos($pathinfo, '/panier/commande')) {
                // jeremy_passage_commande
                if ('/panier/commande' === $pathinfo) {
                    return array (  '_controller' => 'Jeremy\\CommandeBundle\\Controller\\CommandeController::commandeAction',  '_route' => 'jeremy_passage_commande',);
                }

                // jeremy_commande_paiement
                if ('/panier/commande/paiement' === $pathinfo) {
                    return array (  '_controller' => 'Jeremy\\CommandeBundle\\Controller\\CommandeController::paiementAction',  '_route' => 'jeremy_commande_paiement',);
                }

            }

            // jeremy_panier_homepage
            if ('/panier' === $pathinfo) {
                return array (  '_controller' => 'Jeremy\\PanierBundle\\Controller\\PanierController::panierAction',  '_route' => 'jeremy_panier_homepage',);
            }

            // jeremy_panier_ajouter
            if (0 === strpos($pathinfo, '/panier/ajouter') && preg_match('#^/panier/ajouter/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'jeremy_panier_ajouter')), array (  '_controller' => 'Jeremy\\PanierBundle\\Controller\\PanierController::ajouterAction',));
            }

            // jeremy_panier_supprimer
            if (0 === strpos($pathinfo, '/panier/supprimer') && preg_match('#^/panier/supprimer(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'jeremy_panier_supprimer')), array (  '_controller' => 'Jeremy\\PanierBundle\\Controller\\PanierController::supprimerAction',));
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

        if (0 === strpos($pathinfo, '/c')) {
            // jeremy_front_contact
            if ('/contact' === $pathinfo) {
                return array (  '_controller' => 'Jeremy\\FrontBundle\\Controller\\DefaultController::contactAction',  '_route' => 'jeremy_front_contact',);
            }

            // jeremy_front_cgv
            if ('/cgv' === $pathinfo) {
                return array (  '_controller' => 'Jeremy\\FrontBundle\\Controller\\DefaultController::cgvAction',  '_route' => 'jeremy_front_cgv',);
            }

            if (0 === strpos($pathinfo, '/chaussure')) {
                // jeremy_front_botte
                if ('/chaussure/botte' === $pathinfo) {
                    return array (  '_controller' => 'Jeremy\\FrontBundle\\Controller\\ChaussureController::bottesAction',  '_route' => 'jeremy_front_botte',);
                }

                // jeremy_front_basket
                if ('/chaussure/basket' === $pathinfo) {
                    return array (  '_controller' => 'Jeremy\\FrontBundle\\Controller\\ChaussureController::basketsAction',  '_route' => 'jeremy_front_basket',);
                }

                // jeremy_front_sandale
                if ('/chaussure/sandale' === $pathinfo) {
                    return array (  '_controller' => 'Jeremy\\FrontBundle\\Controller\\ChaussureController::sandalesAction',  '_route' => 'jeremy_front_sandale',);
                }

                // jeremy_front_escarpin
                if ('/chaussure/escarpin' === $pathinfo) {
                    return array (  '_controller' => 'Jeremy\\FrontBundle\\Controller\\ChaussureController::escarpinsAction',  '_route' => 'jeremy_front_escarpin',);
                }

                // jeremy_front_chausson
                if ('/chaussure/chausson' === $pathinfo) {
                    return array (  '_controller' => 'Jeremy\\FrontBundle\\Controller\\ChaussureController::chaussonsAction',  '_route' => 'jeremy_front_chausson',);
                }

                // jeremy_front_detail_chaussure
                if (preg_match('#^/chaussure/(?P<id_du_produit>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'jeremy_front_detail_chaussure')), array (  '_controller' => 'Jeremy\\FrontBundle\\Controller\\DefaultController::detailChaussureAction',));
                }

            }

        }

        // jeremy_front_faq
        if ('/faq' === $pathinfo) {
            return array (  '_controller' => 'Jeremy\\FrontBundle\\Controller\\DefaultController::faqAction',  '_route' => 'jeremy_front_faq',);
        }

        // jeremy_front_mention
        if ('/mention' === $pathinfo) {
            return array (  '_controller' => 'Jeremy\\FrontBundle\\Controller\\DefaultController::mentionAction',  '_route' => 'jeremy_front_mention',);
        }

        if (0 === strpos($pathinfo, '/accessoire')) {
            // jeremy_front_accessoire
            if ('/accessoire' === $pathinfo) {
                return array (  '_controller' => 'Jeremy\\FrontBundle\\Controller\\AccessoireController::indexAction',  '_route' => 'jeremy_front_accessoire',);
            }

            // jeremy_front_sac
            if ('/accessoire/sac' === $pathinfo) {
                return array (  '_controller' => 'Jeremy\\FrontBundle\\Controller\\AccessoireController::sacsAction',  '_route' => 'jeremy_front_sac',);
            }

            // jeremy_front_echarpe
            if ('/accessoire/echarpe' === $pathinfo) {
                return array (  '_controller' => 'Jeremy\\FrontBundle\\Controller\\AccessoireController::echarpesAction',  '_route' => 'jeremy_front_echarpe',);
            }

            // jeremy_front_ceinture
            if ('/accessoire/ceinture' === $pathinfo) {
                return array (  '_controller' => 'Jeremy\\FrontBundle\\Controller\\AccessoireController::ceinturesAction',  '_route' => 'jeremy_front_ceinture',);
            }

            // jeremy_front_chapeau
            if ('/accessoire/chapeau' === $pathinfo) {
                return array (  '_controller' => 'Jeremy\\FrontBundle\\Controller\\AccessoireController::chapeauxAction',  '_route' => 'jeremy_front_chapeau',);
            }

            // jeremy_front_bijou
            if ('/accessoire/bijou' === $pathinfo) {
                return array (  '_controller' => 'Jeremy\\FrontBundle\\Controller\\AccessoireController::bijouxAction',  '_route' => 'jeremy_front_bijou',);
            }

            // jeremy_front_detail_accessoire
            if (preg_match('#^/accessoire/(?P<id_du_produit>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'jeremy_front_detail_accessoire')), array (  '_controller' => 'Jeremy\\FrontBundle\\Controller\\DefaultController::detailAccessoireAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/vetement')) {
            // jeremy_front_tops
            if ('/vetement/tops' === $pathinfo) {
                return array (  '_controller' => 'Jeremy\\FrontBundle\\Controller\\VetementController::topsAction',  '_route' => 'jeremy_front_tops',);
            }

            // jeremy_front_robe
            if ('/vetement/robes' === $pathinfo) {
                return array (  '_controller' => 'Jeremy\\FrontBundle\\Controller\\VetementController::robesAction',  '_route' => 'jeremy_front_robe',);
            }

            // jeremy_front_pantalon
            if ('/vetement/pantalon' === $pathinfo) {
                return array (  '_controller' => 'Jeremy\\FrontBundle\\Controller\\VetementController::pantalonsAction',  '_route' => 'jeremy_front_pantalon',);
            }

            // jeremy_front_jupe
            if ('/vetement/jupe' === $pathinfo) {
                return array (  '_controller' => 'Jeremy\\FrontBundle\\Controller\\VetementController::jupesAction',  '_route' => 'jeremy_front_jupe',);
            }

            // jeremy_front_veste
            if ('/vetement/veste-manteau' === $pathinfo) {
                return array (  '_controller' => 'Jeremy\\FrontBundle\\Controller\\VetementController::vestesAction',  '_route' => 'jeremy_front_veste',);
            }

            // jeremy_front_detail_vetement
            if (preg_match('#^/vetement/(?P<id_du_produit>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'jeremy_front_detail_vetement')), array (  '_controller' => 'Jeremy\\FrontBundle\\Controller\\DefaultController::detailVetementAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/login')) {
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

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
