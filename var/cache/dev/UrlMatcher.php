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
        '/api' => [[['_route' => 'api_post_store', '_controller' => 'App\\Controller\\ApiPostController::store'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::contact'], null, null, null, false, false, null]],
        '/discount' => [[['_route' => 'discount', '_controller' => 'App\\Controller\\SearchBarController::discount'], null, null, null, false, false, null]],
        '/research' => [[['_route' => 'research', '_controller' => 'App\\Controller\\SearchBarController::resultSearch'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'inscription', '_controller' => 'App\\Controller\\SecurityController::inscription'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'connexion', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'deconnexion', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/deleteUserAction' => [[['_route' => 'deleteUserAction', '_controller' => 'App\\Controller\\SecurityController::deleteUserAction'], null, null, null, false, false, null]],
        '/mdpOublie' => [[['_route' => 'mdpOublie', '_controller' => 'App\\Controller\\SecurityController::mdpOublie'], null, null, null, false, false, null]],
        '/modifier' => [[['_route' => 'modifier', '_controller' => 'App\\Controller\\SecurityController::modifier'], null, null, null, false, false, null]],
        '/mdp' => [[['_route' => 'mdp', '_controller' => 'App\\Controller\\SecurityController::resetting'], null, null, null, false, false, null]],
        '/erreur' => [[['_route' => 'erreur', '_controller' => 'App\\Controller\\SecurityController::erreur'], null, null, null, false, false, null]],
        '/ajoutTheme' => [[['_route' => 'ajoutTheme', '_controller' => 'App\\Controller\\ThemeController::ajoutTheme'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'wishlist', '_controller' => 'App\\Controller\\WishlistController::index'], null, null, null, false, false, null]],
        '/propos' => [[['_route' => 'propos', '_controller' => 'App\\Controller\\WishlistController::propos'], null, null, null, false, false, null]],
        '/mywishlist' => [[['_route' => 'mywishlist', '_controller' => 'App\\Controller\\WishlistController::mywishlist'], null, null, null, false, false, null]],
        '/profil' => [[['_route' => 'profil', '_controller' => 'App\\Controller\\WishlistController::profil'], null, null, null, false, false, null]],
        '/faq' => [[['_route' => 'faq', '_controller' => 'App\\Controller\\WishlistController::faq'], null, null, null, false, false, null]],
        '/login' => [[['_route' => '/*login', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/a(?'
                    .'|ddArticles/([^/]++)/([^/]++)(*:202)'
                    .'|rticle/([^/]++)(*:225)'
                .')'
                .'|/resetMdp/([^/]++)(*:252)'
                .'|/m(?'
                    .'|yTheme/([^/]++)(*:280)'
                    .'|odif(?'
                        .'|ierTheme/([^/]++)(*:312)'
                        .'|Image/([^/]++)/([^/]++)(*:343)'
                    .')'
                .')'
                .'|/supprimerTheme/([^/]++)(*:377)'
                .'|/form(?'
                    .'|Wishlist(?'
                        .'|/([^/]++)/modif(*:419)'
                        .'|(?:/([^/]++))?(*:441)'
                        .'|Prepara/([^/]++)(*:465)'
                    .')'
                    .'|Article(?'
                        .'|(?:/([^/]++))?(*:498)'
                        .'|/([^/]++)/modif(*:521)'
                    .')'
                .')'
                .'|/delet(?'
                    .'|Wshl/([^/]++)(*:553)'
                    .'|eArticle/([^/]++)(*:578)'
                .')'
                .'|/L2xpZW5zZWNyZXRteUFydGljbGVzL3tpZH0\\=([^/]++)(*:633)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        202 => [[['_route' => 'addArticles', '_controller' => 'App\\Controller\\SearchBarController::addArticles'], ['id', 'idA'], null, null, false, true, null]],
        225 => [[['_route' => 'article', '_controller' => 'App\\Controller\\WishlistController::article'], ['id'], null, null, false, true, null]],
        252 => [[['_route' => 'resetMdp', '_controller' => 'App\\Controller\\SecurityController::resetMdp'], ['token'], null, null, false, true, null]],
        280 => [[['_route' => 'myTheme', '_controller' => 'App\\Controller\\ThemeController::myTheme'], ['id'], null, null, false, true, null]],
        312 => [[['_route' => 'modifierTheme', '_controller' => 'App\\Controller\\ThemeController::modifierTheme'], ['id'], null, null, false, true, null]],
        343 => [[['_route' => 'modifImage', '_controller' => 'App\\Controller\\WishlistController::modifImage'], ['id', 'url'], null, null, false, true, null]],
        377 => [[['_route' => 'supprimerTheme', '_controller' => 'App\\Controller\\ThemeController::deleteTheme'], ['id'], null, null, false, true, null]],
        419 => [[['_route' => 'formWishlist_modif', '_controller' => 'App\\Controller\\WishlistController::formWishlist'], ['id'], null, null, false, false, null]],
        441 => [[['_route' => 'formWishlist', 'a' => null, '_controller' => 'App\\Controller\\WishlistController::formWishlist'], ['a'], null, null, false, true, null]],
        465 => [[['_route' => 'formWishlistPrepara', '_controller' => 'App\\Controller\\WishlistController::formWishlistPrepara'], ['id'], null, null, false, true, null]],
        498 => [[['_route' => 'formArticle', 'idW' => null, '_controller' => 'App\\Controller\\WishlistController::formArticle'], ['idW'], null, null, false, true, null]],
        521 => [[['_route' => 'formArticle_modif', 'id' => null, '_controller' => 'App\\Controller\\WishlistController::formArticle'], ['id'], null, null, false, false, null]],
        553 => [[['_route' => 'deletWshl', '_controller' => 'App\\Controller\\WishlistController::deletWshl'], ['id'], null, null, false, true, null]],
        578 => [[['_route' => 'deleteArticle', '_controller' => 'App\\Controller\\WishlistController::deleteArticle'], ['id'], null, null, false, true, null]],
        633 => [
            [['_route' => 'myArticles', '_controller' => ['App\\Controller\\WishlistController', 'myArticles']], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
