<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        'api.job.list.en' => [['token'], ['_controller' => 'App\\Controller\\API\\JobController::getJobsAction', '_locale' => 'en', '_canonical_route' => 'api.job.list'], [], [['text', '/jobs'], ['variable', '/', '[^/]++', 'token']], [], []],
        'api.job.list.ru' => [['token'], ['_controller' => 'App\\Controller\\API\\JobController::getJobsAction', '_locale' => 'ru', '_canonical_route' => 'api.job.list'], [], [['text', '/jobs'], ['variable', '/', '[^/]++', 'token'], ['text', '/ru']], [], []],
        'admin.affiliate.list.en' => [['page'], ['page' => 1, '_controller' => 'App\\Controller\\Admin\\AffiliateController::list', '_locale' => 'en', '_canonical_route' => 'admin.affiliate.list'], ['page' => '\\d+'], [['variable', '/', '\\d+', 'page'], ['text', '/admin/affiliates']], [], []],
        'admin.affiliate.list.ru' => [['page'], ['page' => 1, '_controller' => 'App\\Controller\\Admin\\AffiliateController::list', '_locale' => 'ru', '_canonical_route' => 'admin.affiliate.list'], ['page' => '\\d+'], [['variable', '/', '\\d+', 'page'], ['text', '/ru/admin/affiliates']], [], []],
        'admin.affiliate.activate.en' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AffiliateController::activate', '_locale' => 'en', '_canonical_route' => 'admin.affiliate.activate'], ['id' => '\\d+'], [['text', '/activate'], ['variable', '/', '\\d+', 'id'], ['text', '/admin/affiliate']], [], []],
        'admin.affiliate.activate.ru' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AffiliateController::activate', '_locale' => 'ru', '_canonical_route' => 'admin.affiliate.activate'], ['id' => '\\d+'], [['text', '/activate'], ['variable', '/', '\\d+', 'id'], ['text', '/ru/admin/affiliate']], [], []],
        'admin.affiliate.deactivate.en' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AffiliateController::deactivate', '_locale' => 'en', '_canonical_route' => 'admin.affiliate.deactivate'], ['id' => '\\d+'], [['text', '/deactivate'], ['variable', '/', '\\d+', 'id'], ['text', '/admin/affiliate']], [], []],
        'admin.affiliate.deactivate.ru' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AffiliateController::deactivate', '_locale' => 'ru', '_canonical_route' => 'admin.affiliate.deactivate'], ['id' => '\\d+'], [['text', '/deactivate'], ['variable', '/', '\\d+', 'id'], ['text', '/ru/admin/affiliate']], [], []],
        'admin.category.list.en' => [[], ['_controller' => 'App\\Controller\\Admin\\CategoryController::list', '_locale' => 'en', '_canonical_route' => 'admin.category.list'], [], [['text', '/admin/categories']], [], []],
        'admin.category.list.ru' => [[], ['_controller' => 'App\\Controller\\Admin\\CategoryController::list', '_locale' => 'ru', '_canonical_route' => 'admin.category.list'], [], [['text', '/ru/admin/categories']], [], []],
        'admin.category.create.en' => [[], ['_controller' => 'App\\Controller\\Admin\\CategoryController::create', '_locale' => 'en', '_canonical_route' => 'admin.category.create'], [], [['text', '/admin/category/create']], [], []],
        'admin.category.create.ru' => [[], ['_controller' => 'App\\Controller\\Admin\\CategoryController::create', '_locale' => 'ru', '_canonical_route' => 'admin.category.create'], [], [['text', '/ru/admin/category/create']], [], []],
        'admin.category.edit.en' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CategoryController::edit', '_locale' => 'en', '_canonical_route' => 'admin.category.edit'], ['id' => '\\d+'], [['text', '/edit'], ['variable', '/', '\\d+', 'id'], ['text', '/admin/category']], [], []],
        'admin.category.edit.ru' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CategoryController::edit', '_locale' => 'ru', '_canonical_route' => 'admin.category.edit'], ['id' => '\\d+'], [['text', '/edit'], ['variable', '/', '\\d+', 'id'], ['text', '/ru/admin/category']], [], []],
        'admin.category.delete.en' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CategoryController::delete', '_locale' => 'en', '_canonical_route' => 'admin.category.delete'], ['id' => '\\d+'], [['text', '/delete'], ['variable', '/', '\\d+', 'id'], ['text', '/admin/category']], [], []],
        'admin.category.delete.ru' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CategoryController::delete', '_locale' => 'ru', '_canonical_route' => 'admin.category.delete'], ['id' => '\\d+'], [['text', '/delete'], ['variable', '/', '\\d+', 'id'], ['text', '/ru/admin/category']], [], []],
        'admin.job.list.en' => [['page'], ['page' => 1, '_controller' => 'App\\Controller\\Admin\\JobController::list', '_locale' => 'en', '_canonical_route' => 'admin.job.list'], ['page' => '\\d+'], [['variable', '/', '\\d+', 'page'], ['text', '/admin/jobs']], [], []],
        'admin.job.list.ru' => [['page'], ['page' => 1, '_controller' => 'App\\Controller\\Admin\\JobController::list', '_locale' => 'ru', '_canonical_route' => 'admin.job.list'], ['page' => '\\d+'], [['variable', '/', '\\d+', 'page'], ['text', '/ru/admin/jobs']], [], []],
        'admin.job.create.en' => [[], ['_controller' => 'App\\Controller\\Admin\\JobController::create', '_locale' => 'en', '_canonical_route' => 'admin.job.create'], [], [['text', '/admin/job/create']], [], []],
        'admin.job.create.ru' => [[], ['_controller' => 'App\\Controller\\Admin\\JobController::create', '_locale' => 'ru', '_canonical_route' => 'admin.job.create'], [], [['text', '/ru/admin/job/create']], [], []],
        'admin.job.edit.en' => [['id'], ['_controller' => 'App\\Controller\\Admin\\JobController::edit', '_locale' => 'en', '_canonical_route' => 'admin.job.edit'], ['id' => '\\d+'], [['text', '/edit'], ['variable', '/', '\\d+', 'id'], ['text', '/admin/job']], [], []],
        'admin.job.edit.ru' => [['id'], ['_controller' => 'App\\Controller\\Admin\\JobController::edit', '_locale' => 'ru', '_canonical_route' => 'admin.job.edit'], ['id' => '\\d+'], [['text', '/edit'], ['variable', '/', '\\d+', 'id'], ['text', '/ru/admin/job']], [], []],
        'admin.job.delete.en' => [['id'], ['_controller' => 'App\\Controller\\Admin\\JobController::delete', '_locale' => 'en', '_canonical_route' => 'admin.job.delete'], ['id' => '\\d+'], [['text', '/delete'], ['variable', '/', '\\d+', 'id'], ['text', '/admin/job']], [], []],
        'admin.job.delete.ru' => [['id'], ['_controller' => 'App\\Controller\\Admin\\JobController::delete', '_locale' => 'ru', '_canonical_route' => 'admin.job.delete'], ['id' => '\\d+'], [['text', '/delete'], ['variable', '/', '\\d+', 'id'], ['text', '/ru/admin/job']], [], []],
        'affiliate.create.en' => [[], ['_controller' => 'App\\Controller\\AffiliateController::create', '_locale' => 'en', '_canonical_route' => 'affiliate.create'], [], [['text', '/affiliate/create']], [], []],
        'affiliate.create.ru' => [[], ['_controller' => 'App\\Controller\\AffiliateController::create', '_locale' => 'ru', '_canonical_route' => 'affiliate.create'], [], [['text', '/ru/affiliate/create']], [], []],
        'affiliate.wait.en' => [[], ['_controller' => 'App\\Controller\\AffiliateController::wait', '_locale' => 'en', '_canonical_route' => 'affiliate.wait'], [], [['text', '/affiliate/wait']], [], []],
        'affiliate.wait.ru' => [[], ['_controller' => 'App\\Controller\\AffiliateController::wait', '_locale' => 'ru', '_canonical_route' => 'affiliate.wait'], [], [['text', '/ru/affiliate/wait']], [], []],
        'category.show.en' => [['slug', 'page'], ['page' => 1, '_controller' => 'App\\Controller\\CategoryController::show', '_locale' => 'en', '_canonical_route' => 'category.show'], ['page' => '\\d+'], [['variable', '/', '\\d+', 'page'], ['variable', '/', '[^/]++', 'slug'], ['text', '/category']], [], []],
        'category.show.ru' => [['slug', 'page'], ['page' => 1, '_controller' => 'App\\Controller\\CategoryController::show', '_locale' => 'ru', '_canonical_route' => 'category.show'], ['page' => '\\d+'], [['variable', '/', '\\d+', 'page'], ['variable', '/', '[^/]++', 'slug'], ['text', '/ru/category']], [], []],
        'job.list.en' => [[], ['_controller' => 'App\\Controller\\JobController::list', '_locale' => 'en', '_canonical_route' => 'job.list'], [], [['text', '/']], [], []],
        'job.list.ru' => [[], ['_controller' => 'App\\Controller\\JobController::list', '_locale' => 'ru', '_canonical_route' => 'job.list'], [], [['text', '/ru/']], [], []],
        'job.show.en' => [['id'], ['_controller' => 'App\\Controller\\JobController::show', '_locale' => 'en', '_canonical_route' => 'job.show'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id'], ['text', '/job']], [], []],
        'job.show.ru' => [['id'], ['_controller' => 'App\\Controller\\JobController::show', '_locale' => 'ru', '_canonical_route' => 'job.show'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id'], ['text', '/ru/job']], [], []],
        'job.create.en' => [[], ['_controller' => 'App\\Controller\\JobController::create', '_locale' => 'en', '_canonical_route' => 'job.create'], [], [['text', '/job/create']], [], []],
        'job.create.ru' => [[], ['_controller' => 'App\\Controller\\JobController::create', '_locale' => 'ru', '_canonical_route' => 'job.create'], [], [['text', '/ru/job/create']], [], []],
        'job.edit.en' => [['token'], ['_controller' => 'App\\Controller\\JobController::edit', '_locale' => 'en', '_canonical_route' => 'job.edit'], ['token' => '\\w+'], [['text', '/edit'], ['variable', '/', '\\w+', 'token'], ['text', '/job']], [], []],
        'job.edit.ru' => [['token'], ['_controller' => 'App\\Controller\\JobController::edit', '_locale' => 'ru', '_canonical_route' => 'job.edit'], ['token' => '\\w+'], [['text', '/edit'], ['variable', '/', '\\w+', 'token'], ['text', '/ru/job']], [], []],
        'job.preview.en' => [['token'], ['_controller' => 'App\\Controller\\JobController::preview', '_locale' => 'en', '_canonical_route' => 'job.preview'], ['token' => '\\w+'], [['variable', '/', '\\w+', 'token'], ['text', '/job']], [], []],
        'job.preview.ru' => [['token'], ['_controller' => 'App\\Controller\\JobController::preview', '_locale' => 'ru', '_canonical_route' => 'job.preview'], ['token' => '\\w+'], [['variable', '/', '\\w+', 'token'], ['text', '/ru/job']], [], []],
        'job.delete.en' => [['token'], ['_controller' => 'App\\Controller\\JobController::delete', '_locale' => 'en', '_canonical_route' => 'job.delete'], ['token' => '\\w+'], [['text', '/delete'], ['variable', '/', '\\w+', 'token'], ['text', '/job']], [], []],
        'job.delete.ru' => [['token'], ['_controller' => 'App\\Controller\\JobController::delete', '_locale' => 'ru', '_canonical_route' => 'job.delete'], ['token' => '\\w+'], [['text', '/delete'], ['variable', '/', '\\w+', 'token'], ['text', '/ru/job']], [], []],
        'job.publish.en' => [['token'], ['_controller' => 'App\\Controller\\JobController::publish', '_locale' => 'en', '_canonical_route' => 'job.publish'], ['token' => '\\w+'], [['text', '/publish'], ['variable', '/', '\\w+', 'token'], ['text', '/job']], [], []],
        'job.publish.ru' => [['token'], ['_controller' => 'App\\Controller\\JobController::publish', '_locale' => 'ru', '_canonical_route' => 'job.publish'], ['token' => '\\w+'], [['text', '/publish'], ['variable', '/', '\\w+', 'token'], ['text', '/ru/job']], [], []],
        'api.job.list' => [['token'], ['_controller' => 'App\\Controller\\API\\JobController::getJobsAction'], [], [['text', '/jobs'], ['variable', '/', '[^/]++', 'token'], ['text', '/api/v1']], [], []],
        '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
        '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
        '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
        '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
        '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
        '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
        '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
        '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
        '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
        '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
        '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
        '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
        'fos_user_security_login.en' => [[], ['_controller' => 'fos_user.security.controller:loginAction', '_locale' => 'en', '_canonical_route' => 'fos_user_security_login'], [], [['text', '/login']], [], []],
        'fos_user_security_login.ru' => [[], ['_controller' => 'fos_user.security.controller:loginAction', '_locale' => 'ru', '_canonical_route' => 'fos_user_security_login'], [], [['text', '/ru/login']], [], []],
        'fos_user_security_check.en' => [[], ['_controller' => 'fos_user.security.controller:checkAction', '_locale' => 'en', '_canonical_route' => 'fos_user_security_check'], [], [['text', '/login_check']], [], []],
        'fos_user_security_check.ru' => [[], ['_controller' => 'fos_user.security.controller:checkAction', '_locale' => 'ru', '_canonical_route' => 'fos_user_security_check'], [], [['text', '/ru/login_check']], [], []],
        'fos_user_security_logout.en' => [[], ['_controller' => 'fos_user.security.controller:logoutAction', '_locale' => 'en', '_canonical_route' => 'fos_user_security_logout'], [], [['text', '/logout']], [], []],
        'fos_user_security_logout.ru' => [[], ['_controller' => 'fos_user.security.controller:logoutAction', '_locale' => 'ru', '_canonical_route' => 'fos_user_security_logout'], [], [['text', '/ru/logout']], [], []],
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
