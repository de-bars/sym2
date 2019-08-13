<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [
            [['_route' => 'easyadmin', '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\EasyAdminController::indexAction'], null, null, null, true, false, null],
            [['_route' => 'sonata_admin_redirect', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'sonata_admin_dashboard', 'permanent' => 'true'], null, null, null, true, false, null],
        ],
        '/admin/dashboard' => [[['_route' => 'sonata_admin_dashboard', '_controller' => 'Sonata\\AdminBundle\\Action\\DashboardAction'], null, null, null, false, false, null]],
        '/admin/core/get-form-field-element' => [[['_route' => 'sonata_admin_retrieve_form_element', '_controller' => 'sonata.admin.action.retrieve_form_field_element'], null, null, null, false, false, null]],
        '/admin/core/append-form-field-element' => [[['_route' => 'sonata_admin_append_form_element', '_controller' => 'sonata.admin.action.append_form_field_element'], null, null, null, false, false, null]],
        '/admin/core/set-object-field-value' => [[['_route' => 'sonata_admin_set_object_field_value', '_controller' => 'sonata.admin.action.set_object_field_value'], null, null, null, false, false, null]],
        '/admin/search' => [[['_route' => 'sonata_admin_search', '_controller' => 'Sonata\\AdminBundle\\Action\\SearchAction'], null, null, null, false, false, null]],
        '/admin/core/get-autocomplete-items' => [[['_route' => 'sonata_admin_retrieve_autocomplete_items', '_controller' => 'sonata.admin.action.retrieve_autocomplete_items'], null, null, null, false, false, null]],
        '/admin/app/address/list' => [[['_route' => 'admin_app_address_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'App\\Admin\\AddressAdmin', '_sonata_name' => 'admin_app_address_list'], null, null, null, false, false, null]],
        '/admin/app/address/create' => [[['_route' => 'admin_app_address_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'App\\Admin\\AddressAdmin', '_sonata_name' => 'admin_app_address_create'], null, null, null, false, false, null]],
        '/admin/app/address/batch' => [[['_route' => 'admin_app_address_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'App\\Admin\\AddressAdmin', '_sonata_name' => 'admin_app_address_batch'], null, null, null, false, false, null]],
        '/admin/app/address/export' => [[['_route' => 'admin_app_address_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'App\\Admin\\AddressAdmin', '_sonata_name' => 'admin_app_address_export'], null, null, null, false, false, null]],
        '/admin/app/city/list' => [[['_route' => 'admin_app_city_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'App\\Admin\\CityAdmin', '_sonata_name' => 'admin_app_city_list'], null, null, null, false, false, null]],
        '/admin/app/city/create' => [[['_route' => 'admin_app_city_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'App\\Admin\\CityAdmin', '_sonata_name' => 'admin_app_city_create'], null, null, null, false, false, null]],
        '/admin/app/city/batch' => [[['_route' => 'admin_app_city_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'App\\Admin\\CityAdmin', '_sonata_name' => 'admin_app_city_batch'], null, null, null, false, false, null]],
        '/admin/app/city/export' => [[['_route' => 'admin_app_city_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'App\\Admin\\CityAdmin', '_sonata_name' => 'admin_app_city_export'], null, null, null, false, false, null]],
        '/admin/app/user/list' => [[['_route' => 'admin_app_user_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'sonata.user.admin.user', '_sonata_name' => 'admin_app_user_list'], null, null, null, false, false, null]],
        '/admin/app/user/create' => [[['_route' => 'admin_app_user_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'sonata.user.admin.user', '_sonata_name' => 'admin_app_user_create'], null, null, null, false, false, null]],
        '/admin/app/user/batch' => [[['_route' => 'admin_app_user_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'sonata.user.admin.user', '_sonata_name' => 'admin_app_user_batch'], null, null, null, false, false, null]],
        '/admin/app/user/export' => [[['_route' => 'admin_app_user_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'sonata.user.admin.user', '_sonata_name' => 'admin_app_user_export'], null, null, null, false, false, null]],
        '/admin/app/group/list' => [[['_route' => 'admin_app_group_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'sonata.user.admin.group', '_sonata_name' => 'admin_app_group_list'], null, null, null, false, false, null]],
        '/admin/app/group/create' => [[['_route' => 'admin_app_group_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'sonata.user.admin.group', '_sonata_name' => 'admin_app_group_create'], null, null, null, false, false, null]],
        '/admin/app/group/batch' => [[['_route' => 'admin_app_group_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'sonata.user.admin.group', '_sonata_name' => 'admin_app_group_batch'], null, null, null, false, false, null]],
        '/admin/app/group/export' => [[['_route' => 'admin_app_group_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'sonata.user.admin.group', '_sonata_name' => 'admin_app_group_export'], null, null, null, false, false, null]],
        '/blog' => [[['_route' => 'BloggerBlogBundle_homepage', '_controller' => 'App\\Blogger\\BlogBundle\\Controller\\PageController::indexAction'], null, null, null, true, false, null]],
        '/blog/about' => [[['_route' => 'BloggerBlogBundle_about', '_controller' => 'App\\Blogger\\BlogBundle\\Controller\\PageController::aboutAction'], null, null, null, false, false, null]],
        '/blog/contact' => [[['_route' => 'BloggerBlogBundle_contact', '_controller' => 'App\\Blogger\\BlogBundle\\Controller\\PageController::contactAction'], null, null, null, false, false, null]],
        '/admin/login' => [[['_route' => 'sonata_user_admin_security_login', '_controller' => 'Sonata\\UserBundle\\Action\\LoginAction'], null, null, null, false, false, null]],
        '/admin/login_check' => [[['_route' => 'sonata_user_admin_security_check', '_controller' => 'Sonata\\UserBundle\\Action\\CheckLoginAction'], null, ['POST' => 0], null, false, false, null]],
        '/admin/logout' => [[['_route' => 'sonata_user_admin_security_logout', '_controller' => 'Sonata\\UserBundle\\Action\\LogoutAction'], null, null, null, false, false, null]],
        '/admin/resetting/request' => [[['_route' => 'sonata_user_admin_resetting_request', '_controller' => 'Sonata\\UserBundle\\Action\\RequestAction'], null, ['GET' => 0], null, false, false, null]],
        '/admin/resetting/send-email' => [[['_route' => 'sonata_user_admin_resetting_send_email', '_controller' => 'Sonata\\UserBundle\\Action\\SendEmailAction'], null, ['POST' => 0], null, false, false, null]],
        '/admin/resetting/check-email' => [[['_route' => 'sonata_user_admin_resetting_check_email', '_controller' => 'Sonata\\UserBundle\\Action\\CheckEmailAction'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|core/get\\-short\\-object\\-description(?:\\.(html|json))?(*:233)'
                    .'|app/(?'
                        .'|address/([^/]++)/(?'
                            .'|edit(*:272)'
                            .'|delete(*:286)'
                            .'|show(*:298)'
                            .'|acl(*:309)'
                        .')'
                        .'|city/([^/]++)/(?'
                            .'|edit(*:339)'
                            .'|delete(*:353)'
                            .'|show(*:365)'
                            .'|acl(*:376)'
                        .')'
                        .'|user/([^/]++)/(?'
                            .'|edit(*:406)'
                            .'|delete(*:420)'
                            .'|show(*:432)'
                            .'|acl(*:443)'
                        .')'
                        .'|group/([^/]++)/(?'
                            .'|edit(*:474)'
                            .'|delete(*:488)'
                            .'|show(*:500)'
                            .'|acl(*:511)'
                        .')'
                    .')'
                    .'|resetting/reset/([^/]++)(*:545)'
                .')'
                .'|/blog/(?'
                    .'|(\\d+)/([^/]++)(*:577)'
                    .'|comment/(\\d+)(*:598)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        233 => [[['_route' => 'sonata_admin_short_object_information', '_controller' => 'sonata.admin.action.get_short_object_description', '_format' => 'html'], ['_format'], null, null, false, true, null]],
        272 => [[['_route' => 'admin_app_address_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'App\\Admin\\AddressAdmin', '_sonata_name' => 'admin_app_address_edit'], ['id'], null, null, false, false, null]],
        286 => [[['_route' => 'admin_app_address_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'App\\Admin\\AddressAdmin', '_sonata_name' => 'admin_app_address_delete'], ['id'], null, null, false, false, null]],
        298 => [[['_route' => 'admin_app_address_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'App\\Admin\\AddressAdmin', '_sonata_name' => 'admin_app_address_show'], ['id'], null, null, false, false, null]],
        309 => [[['_route' => 'admin_app_address_acl', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::aclAction', '_sonata_admin' => 'App\\Admin\\AddressAdmin', '_sonata_name' => 'admin_app_address_acl'], ['id'], null, null, false, false, null]],
        339 => [[['_route' => 'admin_app_city_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'App\\Admin\\CityAdmin', '_sonata_name' => 'admin_app_city_edit'], ['id'], null, null, false, false, null]],
        353 => [[['_route' => 'admin_app_city_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'App\\Admin\\CityAdmin', '_sonata_name' => 'admin_app_city_delete'], ['id'], null, null, false, false, null]],
        365 => [[['_route' => 'admin_app_city_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'App\\Admin\\CityAdmin', '_sonata_name' => 'admin_app_city_show'], ['id'], null, null, false, false, null]],
        376 => [[['_route' => 'admin_app_city_acl', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::aclAction', '_sonata_admin' => 'App\\Admin\\CityAdmin', '_sonata_name' => 'admin_app_city_acl'], ['id'], null, null, false, false, null]],
        406 => [[['_route' => 'admin_app_user_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'sonata.user.admin.user', '_sonata_name' => 'admin_app_user_edit'], ['id'], null, null, false, false, null]],
        420 => [[['_route' => 'admin_app_user_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'sonata.user.admin.user', '_sonata_name' => 'admin_app_user_delete'], ['id'], null, null, false, false, null]],
        432 => [[['_route' => 'admin_app_user_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'sonata.user.admin.user', '_sonata_name' => 'admin_app_user_show'], ['id'], null, null, false, false, null]],
        443 => [[['_route' => 'admin_app_user_acl', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::aclAction', '_sonata_admin' => 'sonata.user.admin.user', '_sonata_name' => 'admin_app_user_acl'], ['id'], null, null, false, false, null]],
        474 => [[['_route' => 'admin_app_group_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'sonata.user.admin.group', '_sonata_name' => 'admin_app_group_edit'], ['id'], null, null, false, false, null]],
        488 => [[['_route' => 'admin_app_group_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'sonata.user.admin.group', '_sonata_name' => 'admin_app_group_delete'], ['id'], null, null, false, false, null]],
        500 => [[['_route' => 'admin_app_group_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'sonata.user.admin.group', '_sonata_name' => 'admin_app_group_show'], ['id'], null, null, false, false, null]],
        511 => [[['_route' => 'admin_app_group_acl', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::aclAction', '_sonata_admin' => 'sonata.user.admin.group', '_sonata_name' => 'admin_app_group_acl'], ['id'], null, null, false, false, null]],
        545 => [[['_route' => 'sonata_user_admin_resetting_reset', '_controller' => 'Sonata\\UserBundle\\Action\\ResetAction'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        577 => [[['_route' => 'BloggerBlogBundle_blog_show', '_controller' => 'App\\Blogger\\BlogBundle\\Controller\\BlogController::showAction', 'comments' => true], ['id', 'slug'], null, null, false, true, null]],
        598 => [
            [['_route' => 'BloggerBlogBundle_comment_create', '_controller' => 'App\\Blogger\\BlogBundle\\Controller\\CommentController::createAction'], ['blog_id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
