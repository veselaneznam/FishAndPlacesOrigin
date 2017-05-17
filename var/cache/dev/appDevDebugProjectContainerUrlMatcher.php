<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
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

        // fish_view
        if ($pathinfo === '/fish/{$id}') {
            return array (  '_controller' => 'FishAndPlaces\\UI\\Bundle\\GoGreenBundle\\Controller\\FishController::detailViewAction',  '_route' => 'fish_view',);
        }

        // green_object
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_green_object;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'green_object');
            }

            return array (  '_controller' => 'FishAndPlaces\\UI\\Bundle\\GoGreenBundle\\Controller\\GreenObjectController::indexAction',  '_route' => 'green_object',);
        }
        not_green_object:

        if (0 === strpos($pathinfo, '/map')) {
            // map_view
            if (preg_match('#^/map/(?P<location>[^/]++)(?:/(?P<radius>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_map_view;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'map_view')), array (  'radius' => 100,  '_controller' => 'FishAndPlaces\\UI\\Bundle\\GoGreenBundle\\Controller\\GreenObjectController::mapAction',));
            }
            not_map_view:

            // post_map_view
            if (rtrim($pathinfo, '/') === '/map') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_post_map_view;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'post_map_view');
                }

                return array (  '_controller' => 'FishAndPlaces\\UI\\Bundle\\GoGreenBundle\\Controller\\GreenObjectController::postMapAction',  '_route' => 'post_map_view',);
            }
            not_post_map_view:

        }

        // _searchNearBy
        if ($pathinfo === '/searchNearBy') {
            return array (  '_controller' => 'FishAndPlaces\\UI\\Bundle\\GoGreenBundle\\Controller\\GreenObjectController::searchNearBy',  '_route' => '_searchNearBy',);
        }

        // green_object_map_direction
        if (0 === strpos($pathinfo, '/green_object/map_direction') && preg_match('#^/green_object/map_direction/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'green_object_map_direction')), array (  '_controller' => 'FishAndPlaces\\UI\\Bundle\\GoGreenBundle\\Controller\\GreenObjectController::loadMapDirections',));
        }

        // page_view
        if ($pathinfo === '/page/{$slug}') {
            return array (  '_controller' => 'FishAndPlaces\\UI\\Bundle\\GoGreenBundle\\Controller\\PageController::detailViewAction',  '_route' => 'page_view',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/cabin')) {
                // cabin_list
                if ($pathinfo === '/admin/cabin') {
                    return array (  '_controller' => 'FishAndPlaces\\UI\\Bundle\\AdminBundle\\Controller\\CabinController::indexAction',  '_route' => 'cabin_list',);
                }

                // create_cabin
                if ($pathinfo === '/admin/cabin/add') {
                    return array (  '_controller' => 'FishAndPlaces\\UI\\Bundle\\AdminBundle\\Controller\\CabinController::addAction',  '_route' => 'create_cabin',);
                }

                // edit_cabin
                if (0 === strpos($pathinfo, '/admin/cabin/edit') && preg_match('#^/admin/cabin/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_cabin')), array (  '_controller' => 'FishAndPlaces\\UI\\Bundle\\AdminBundle\\Controller\\CabinController::editAction',));
                }

            }

            // deactivate_cabin
            if (0 === strpos($pathinfo, '/admin/deactivate') && preg_match('#^/admin/deactivate/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'DELETE', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'DELETE', 'HEAD'));
                    goto not_deactivate_cabin;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deactivate_cabin')), array (  '_controller' => 'FishAndPlaces\\UI\\Bundle\\AdminBundle\\Controller\\CabinController::deactivateAction',));
            }
            not_deactivate_cabin:

            // activate_cabin
            if (0 === strpos($pathinfo, '/admin/activate') && preg_match('#^/admin/activate/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_activate_cabin;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'activate_cabin')), array (  '_controller' => 'FishAndPlaces\\UI\\Bundle\\AdminBundle\\Controller\\CabinController::activateAction',));
            }
            not_activate_cabin:

            if (0 === strpos($pathinfo, '/admin/camp')) {
                // camp_list
                if ($pathinfo === '/admin/camp') {
                    return array (  '_controller' => 'FishAndPlaces\\UI\\Bundle\\AdminBundle\\Controller\\CampController::indexAction',  '_route' => 'camp_list',);
                }

                // create_camp
                if ($pathinfo === '/admin/camp/add') {
                    return array (  '_controller' => 'FishAndPlaces\\UI\\Bundle\\AdminBundle\\Controller\\CampController::addAction',  '_route' => 'create_camp',);
                }

                // edit_camp
                if (0 === strpos($pathinfo, '/admin/camp/edit') && preg_match('#^/admin/camp/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_camp')), array (  '_controller' => 'FishAndPlaces\\UI\\Bundle\\AdminBundle\\Controller\\CampController::editAction',));
                }

            }

            // deactivate_camp
            if (0 === strpos($pathinfo, '/admin/deactivate') && preg_match('#^/admin/deactivate/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'DELETE', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'DELETE', 'HEAD'));
                    goto not_deactivate_camp;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deactivate_camp')), array (  '_controller' => 'FishAndPlaces\\UI\\Bundle\\AdminBundle\\Controller\\CampController::deactivateAction',));
            }
            not_deactivate_camp:

            // activate_camp
            if (0 === strpos($pathinfo, '/admin/activate') && preg_match('#^/admin/activate/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_activate_camp;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'activate_camp')), array (  '_controller' => 'FishAndPlaces\\UI\\Bundle\\AdminBundle\\Controller\\CampController::activateAction',));
            }
            not_activate_camp:

            if (0 === strpos($pathinfo, '/admin/page')) {
                // page_list
                if ($pathinfo === '/admin/page') {
                    return array (  '_controller' => 'FishAndPlaces\\UI\\Bundle\\AdminBundle\\Controller\\CmsPageController::indexAction',  '_route' => 'page_list',);
                }

                // create_cms_page
                if ($pathinfo === '/admin/page/add') {
                    return array (  '_controller' => 'FishAndPlaces\\UI\\Bundle\\AdminBundle\\Controller\\CmsPageController::addAction',  '_route' => 'create_cms_page',);
                }

                // edit_page
                if (0 === strpos($pathinfo, '/admin/page/edit') && preg_match('#^/admin/page/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_page')), array (  '_controller' => 'FishAndPlaces\\UI\\Bundle\\AdminBundle\\Controller\\CmsPageController::editAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/d')) {
                if (0 === strpos($pathinfo, '/admin/dam')) {
                    // dam_list
                    if ($pathinfo === '/admin/dam') {
                        return array (  '_controller' => 'FishAndPlaces\\UI\\Bundle\\AdminBundle\\Controller\\DamController::indexAction',  '_route' => 'dam_list',);
                    }

                    // create_dam
                    if ($pathinfo === '/admin/dam/add') {
                        return array (  '_controller' => 'FishAndPlaces\\UI\\Bundle\\AdminBundle\\Controller\\DamController::addAction',  '_route' => 'create_dam',);
                    }

                    // edit_dam
                    if (0 === strpos($pathinfo, '/admin/dam/edit') && preg_match('#^/admin/dam/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_dam')), array (  '_controller' => 'FishAndPlaces\\UI\\Bundle\\AdminBundle\\Controller\\DamController::editAction',));
                    }

                }

                // deactivate_dam
                if (0 === strpos($pathinfo, '/admin/deactivate') && preg_match('#^/admin/deactivate/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'DELETE', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'DELETE', 'HEAD'));
                        goto not_deactivate_dam;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'deactivate_dam')), array (  '_controller' => 'FishAndPlaces\\UI\\Bundle\\AdminBundle\\Controller\\DamController::deactivateAction',));
                }
                not_deactivate_dam:

            }

            // activate_dam
            if (0 === strpos($pathinfo, '/admin/activate') && preg_match('#^/admin/activate/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_activate_dam;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'activate_dam')), array (  '_controller' => 'FishAndPlaces\\UI\\Bundle\\AdminBundle\\Controller\\DamController::activateAction',));
            }
            not_activate_dam:

            if (0 === strpos($pathinfo, '/admin/fish')) {
                // fish_list
                if ($pathinfo === '/admin/fish') {
                    return array (  '_controller' => 'FishAndPlaces\\UI\\Bundle\\AdminBundle\\Controller\\FishController::indexAction',  '_route' => 'fish_list',);
                }

                // create_fish
                if ($pathinfo === '/admin/fish/add') {
                    return array (  '_controller' => 'FishAndPlaces\\UI\\Bundle\\AdminBundle\\Controller\\FishController::addAction',  '_route' => 'create_fish',);
                }

                // edit_fish
                if (0 === strpos($pathinfo, '/admin/fish/edit') && preg_match('#^/admin/fish/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_fish')), array (  '_controller' => 'FishAndPlaces\\UI\\Bundle\\AdminBundle\\Controller\\FishController::editAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/green_object')) {
                // green_object_view
                if (preg_match('#^/admin/green_object/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'green_object_view')), array (  '_controller' => 'FishAndPlaces\\UI\\Bundle\\AdminBundle\\Controller\\GreenObjectController::greenObjectDetailView',));
                }

                // green_object_images_list
                if ($pathinfo === '/admin/green_object/images/{$id}') {
                    return array (  '_controller' => 'FishAndPlaces\\UI\\Bundle\\AdminBundle\\Controller\\GreenObjectImageController::indexAction',  '_route' => 'green_object_images_list',);
                }

                // green_object_images_upload
                if ($pathinfo === '/admin/green_object/upload/images/{$id}') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_green_object_images_upload;
                    }

                    return array (  '_controller' => 'FishAndPlaces\\UI\\Bundle\\AdminBundle\\Controller\\GreenObjectImageController::uploadImagesAction',  '_route' => 'green_object_images_upload',);
                }
                not_green_object_images_upload:

                // green_object_images_delete
                if (0 === strpos($pathinfo, '/admin/green_object/images/delete') && preg_match('#^/admin/green_object/images/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'green_object_images_delete')), array (  '_controller' => 'FishAndPlaces\\UI\\Bundle\\AdminBundle\\Controller\\GreenObjectImageController::deleteAction',));
                }

            }

            // admin
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin');
                }

                return array (  '_controller' => 'FishAndPlaces\\UI\\Bundle\\AdminBundle\\Controller\\IndexController::indexAction',  '_route' => 'admin',);
            }

            // login
            if ($pathinfo === '/admin/login') {
                return array (  '_controller' => 'FishAndPlaces\\UI\\Bundle\\AdminBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
            }

            if (0 === strpos($pathinfo, '/admin/village')) {
                // village_holiday_list
                if ($pathinfo === '/admin/villageHoliday') {
                    return array (  '_controller' => 'FishAndPlaces\\UI\\Bundle\\AdminBundle\\Controller\\VillageHolidayController::indexAction',  '_route' => 'village_holiday_list',);
                }

                // create_villageHoliday
                if ($pathinfo === '/admin/village_holiday/add') {
                    return array (  '_controller' => 'FishAndPlaces\\UI\\Bundle\\AdminBundle\\Controller\\VillageHolidayController::addAction',  '_route' => 'create_villageHoliday',);
                }

                // edit_village_holiday
                if (0 === strpos($pathinfo, '/admin/villageHoliday/edit') && preg_match('#^/admin/villageHoliday/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_village_holiday')), array (  '_controller' => 'FishAndPlaces\\UI\\Bundle\\AdminBundle\\Controller\\VillageHolidayController::editAction',));
                }

            }

            // deactivate_village_holiday
            if (0 === strpos($pathinfo, '/admin/deactivate') && preg_match('#^/admin/deactivate/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'DELETE', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'DELETE', 'HEAD'));
                    goto not_deactivate_village_holiday;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deactivate_village_holiday')), array (  '_controller' => 'FishAndPlaces\\UI\\Bundle\\AdminBundle\\Controller\\VillageHolidayController::deactivateAction',));
            }
            not_deactivate_village_holiday:

            // activate_village_holiday
            if (0 === strpos($pathinfo, '/admin/activate') && preg_match('#^/admin/activate/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_activate_village_holiday;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'activate_village_holiday')), array (  '_controller' => 'FishAndPlaces\\UI\\Bundle\\AdminBundle\\Controller\\VillageHolidayController::activateAction',));
            }
            not_activate_village_holiday:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

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
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

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
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

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

        // logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'logout');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
