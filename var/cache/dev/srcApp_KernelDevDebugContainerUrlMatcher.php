<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/admin/categories' => [[['_route' => 'admin.category.list', '_controller' => 'App\\Controller\\Admin\\CategoryController::list', '_locale' => 'en'], null, ['GET' => 0], null, false, false, null]],
            '/ru/admin/categories' => [[['_route' => 'admin.category.list', '_controller' => 'App\\Controller\\Admin\\CategoryController::list', '_locale' => 'ru'], null, ['GET' => 0], null, false, false, null]],
            '/admin/category/create' => [[['_route' => 'admin.category.create', '_controller' => 'App\\Controller\\Admin\\CategoryController::create', '_locale' => 'en'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/ru/admin/category/create' => [[['_route' => 'admin.category.create', '_controller' => 'App\\Controller\\Admin\\CategoryController::create', '_locale' => 'ru'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/admin/job/create' => [[['_route' => 'admin.job.create', '_controller' => 'App\\Controller\\Admin\\JobController::create', '_locale' => 'en'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/ru/admin/job/create' => [[['_route' => 'admin.job.create', '_controller' => 'App\\Controller\\Admin\\JobController::create', '_locale' => 'ru'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/affiliate/create' => [[['_route' => 'affiliate.create', '_controller' => 'App\\Controller\\AffiliateController::create', '_locale' => 'en'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/ru/affiliate/create' => [[['_route' => 'affiliate.create', '_controller' => 'App\\Controller\\AffiliateController::create', '_locale' => 'ru'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/affiliate/wait' => [[['_route' => 'affiliate.wait', '_controller' => 'App\\Controller\\AffiliateController::wait', '_locale' => 'en'], null, ['GET' => 0], null, false, false, null]],
            '/ru/affiliate/wait' => [[['_route' => 'affiliate.wait', '_controller' => 'App\\Controller\\AffiliateController::wait', '_locale' => 'ru'], null, ['GET' => 0], null, false, false, null]],
            '/' => [[['_route' => 'job.list', '_controller' => 'App\\Controller\\JobController::list', '_locale' => 'en'], null, ['GET' => 0], null, false, false, null]],
            '/ru' => [[['_route' => 'job.list', '_controller' => 'App\\Controller\\JobController::list', '_locale' => 'ru'], null, ['GET' => 0], null, true, false, null]],
            '/job/create' => [[['_route' => 'job.create', '_controller' => 'App\\Controller\\JobController::create', '_locale' => 'en'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/ru/job/create' => [[['_route' => 'job.create', '_controller' => 'App\\Controller\\JobController::create', '_locale' => 'ru'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
            '/login' => [[['_route' => 'fos_user_security_login', '_controller' => 'fos_user.security.controller:loginAction', '_locale' => 'en'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/ru/login' => [[['_route' => 'fos_user_security_login', '_controller' => 'fos_user.security.controller:loginAction', '_locale' => 'ru'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/login_check' => [[['_route' => 'fos_user_security_check', '_controller' => 'fos_user.security.controller:checkAction', '_locale' => 'en'], null, ['POST' => 0], null, false, false, null]],
            '/ru/login_check' => [[['_route' => 'fos_user_security_check', '_controller' => 'fos_user.security.controller:checkAction', '_locale' => 'ru'], null, ['POST' => 0], null, false, false, null]],
            '/logout' => [[['_route' => 'fos_user_security_logout', '_controller' => 'fos_user.security.controller:logoutAction', '_locale' => 'en'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/ru/logout' => [[['_route' => 'fos_user_security_logout', '_controller' => 'fos_user.security.controller:logoutAction', '_locale' => 'ru'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/([^/]++)/jobs(*:21)'
                    .'|/ru/(?'
                        .'|([^/]++)/jobs(*:48)'
                        .'|admin/(?'
                            .'|affiliate(?'
                                .'|s(?:/(\\d+))?(*:88)'
                                .'|/(?'
                                    .'|(\\d+)/activate(*:113)'
                                    .'|(\\d+)/deactivate(*:137)'
                                .')'
                            .')'
                            .'|category/(?'
                                .'|(\\d+)/edit(*:169)'
                                .'|(\\d+)/delete(*:189)'
                            .')'
                            .'|job(?'
                                .'|s(?:/(\\d+))?(*:216)'
                                .'|/(?'
                                    .'|(\\d+)/edit(*:238)'
                                    .'|(\\d+)/delete(*:258)'
                                .')'
                            .')'
                        .')'
                        .'|category/([^/]++)(?:/(\\d+))?(*:297)'
                        .'|job/(?'
                            .'|(\\d+)(*:317)'
                            .'|(\\w+)/edit(*:335)'
                            .'|(\\w+)(*:348)'
                            .'|(\\w+)/delete(*:368)'
                            .'|(\\w+)/publish(*:389)'
                        .')'
                    .')'
                    .'|/a(?'
                        .'|dmin/(?'
                            .'|affiliate(?'
                                .'|s(?:/(\\d+))?(*:436)'
                                .'|/(?'
                                    .'|(\\d+)/activate(*:462)'
                                    .'|(\\d+)/deactivate(*:486)'
                                .')'
                            .')'
                            .'|category/(?'
                                .'|(\\d+)/edit(*:518)'
                                .'|(\\d+)/delete(*:538)'
                            .')'
                            .'|job(?'
                                .'|s(?:/(\\d+))?(*:565)'
                                .'|/(?'
                                    .'|(\\d+)/edit(*:587)'
                                    .'|(\\d+)/delete(*:607)'
                                .')'
                            .')'
                        .')'
                        .'|pi/v1/([^/]++)/jobs(*:637)'
                    .')'
                    .'|/category/([^/]++)(?:/(\\d+))?(*:675)'
                    .'|/job/(?'
                        .'|(\\d+)(*:696)'
                        .'|(\\w+)/edit(*:714)'
                        .'|(\\w+)(*:727)'
                        .'|(\\w+)/delete(*:747)'
                        .'|(\\w+)/publish(*:768)'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:808)'
                        .'|wdt/([^/]++)(*:828)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:874)'
                                .'|router(*:888)'
                                .'|exception(?'
                                    .'|(*:908)'
                                    .'|\\.css(*:921)'
                                .')'
                            .')'
                            .'|(*:931)'
                        .')'
                    .')'
                .')/?$}sD',
        ];
        $this->dynamicRoutes = [
            21 => [[['_route' => 'api.job.list', '_controller' => 'App\\Controller\\API\\JobController::getJobsAction', '_locale' => 'en'], ['token'], ['GET' => 0], null, false, false, null]],
            48 => [[['_route' => 'api.job.list', '_controller' => 'App\\Controller\\API\\JobController::getJobsAction', '_locale' => 'ru'], ['token'], ['GET' => 0], null, false, false, null]],
            88 => [[['_route' => 'admin.affiliate.list', 'page' => 1, '_controller' => 'App\\Controller\\Admin\\AffiliateController::list', '_locale' => 'ru'], ['page'], ['GET' => 0], null, false, true, null]],
            113 => [[['_route' => 'admin.affiliate.activate', '_controller' => 'App\\Controller\\Admin\\AffiliateController::activate', '_locale' => 'ru'], ['id'], ['GET' => 0], null, false, false, null]],
            137 => [[['_route' => 'admin.affiliate.deactivate', '_controller' => 'App\\Controller\\Admin\\AffiliateController::deactivate', '_locale' => 'ru'], ['id'], ['GET' => 0], null, false, false, null]],
            169 => [[['_route' => 'admin.category.edit', '_controller' => 'App\\Controller\\Admin\\CategoryController::edit', '_locale' => 'ru'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            189 => [[['_route' => 'admin.category.delete', '_controller' => 'App\\Controller\\Admin\\CategoryController::delete', '_locale' => 'ru'], ['id'], ['DELETE' => 0], null, false, false, null]],
            216 => [[['_route' => 'admin.job.list', 'page' => 1, '_controller' => 'App\\Controller\\Admin\\JobController::list', '_locale' => 'ru'], ['page'], ['GET' => 0], null, false, true, null]],
            238 => [[['_route' => 'admin.job.edit', '_controller' => 'App\\Controller\\Admin\\JobController::edit', '_locale' => 'ru'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            258 => [[['_route' => 'admin.job.delete', '_controller' => 'App\\Controller\\Admin\\JobController::delete', '_locale' => 'ru'], ['id'], ['DELETE' => 0], null, false, false, null]],
            297 => [[['_route' => 'category.show', 'page' => 1, '_controller' => 'App\\Controller\\CategoryController::show', '_locale' => 'ru'], ['slug', 'page'], ['GET' => 0], null, false, true, null]],
            317 => [[['_route' => 'job.show', '_controller' => 'App\\Controller\\JobController::show', '_locale' => 'ru'], ['id'], ['GET' => 0], null, false, true, null]],
            335 => [[['_route' => 'job.edit', '_controller' => 'App\\Controller\\JobController::edit', '_locale' => 'ru'], ['token'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            348 => [[['_route' => 'job.preview', '_controller' => 'App\\Controller\\JobController::preview', '_locale' => 'ru'], ['token'], ['GET' => 0], null, false, true, null]],
            368 => [[['_route' => 'job.delete', '_controller' => 'App\\Controller\\JobController::delete', '_locale' => 'ru'], ['token'], ['DELETE' => 0], null, false, false, null]],
            389 => [[['_route' => 'job.publish', '_controller' => 'App\\Controller\\JobController::publish', '_locale' => 'ru'], ['token'], ['POST' => 0], null, false, false, null]],
            436 => [[['_route' => 'admin.affiliate.list', 'page' => 1, '_controller' => 'App\\Controller\\Admin\\AffiliateController::list', '_locale' => 'en'], ['page'], ['GET' => 0], null, false, true, null]],
            462 => [[['_route' => 'admin.affiliate.activate', '_controller' => 'App\\Controller\\Admin\\AffiliateController::activate', '_locale' => 'en'], ['id'], ['GET' => 0], null, false, false, null]],
            486 => [[['_route' => 'admin.affiliate.deactivate', '_controller' => 'App\\Controller\\Admin\\AffiliateController::deactivate', '_locale' => 'en'], ['id'], ['GET' => 0], null, false, false, null]],
            518 => [[['_route' => 'admin.category.edit', '_controller' => 'App\\Controller\\Admin\\CategoryController::edit', '_locale' => 'en'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            538 => [[['_route' => 'admin.category.delete', '_controller' => 'App\\Controller\\Admin\\CategoryController::delete', '_locale' => 'en'], ['id'], ['DELETE' => 0], null, false, false, null]],
            565 => [[['_route' => 'admin.job.list', 'page' => 1, '_controller' => 'App\\Controller\\Admin\\JobController::list', '_locale' => 'en'], ['page'], ['GET' => 0], null, false, true, null]],
            587 => [[['_route' => 'admin.job.edit', '_controller' => 'App\\Controller\\Admin\\JobController::edit', '_locale' => 'en'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            607 => [[['_route' => 'admin.job.delete', '_controller' => 'App\\Controller\\Admin\\JobController::delete', '_locale' => 'en'], ['id'], ['DELETE' => 0], null, false, false, null]],
            637 => [[['_route' => 'api.job.list', '_controller' => 'App\\Controller\\API\\JobController::getJobsAction'], ['token'], ['GET' => 0], null, false, false, null]],
            675 => [[['_route' => 'category.show', 'page' => 1, '_controller' => 'App\\Controller\\CategoryController::show', '_locale' => 'en'], ['slug', 'page'], ['GET' => 0], null, false, true, null]],
            696 => [[['_route' => 'job.show', '_controller' => 'App\\Controller\\JobController::show', '_locale' => 'en'], ['id'], ['GET' => 0], null, false, true, null]],
            714 => [[['_route' => 'job.edit', '_controller' => 'App\\Controller\\JobController::edit', '_locale' => 'en'], ['token'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            727 => [[['_route' => 'job.preview', '_controller' => 'App\\Controller\\JobController::preview', '_locale' => 'en'], ['token'], ['GET' => 0], null, false, true, null]],
            747 => [[['_route' => 'job.delete', '_controller' => 'App\\Controller\\JobController::delete', '_locale' => 'en'], ['token'], ['DELETE' => 0], null, false, false, null]],
            768 => [[['_route' => 'job.publish', '_controller' => 'App\\Controller\\JobController::publish', '_locale' => 'en'], ['token'], ['POST' => 0], null, false, false, null]],
            808 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            828 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            874 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            888 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            908 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            921 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            931 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        ];
    }
}
