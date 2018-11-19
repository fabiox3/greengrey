<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'app_homepage' => array(array(), array('_controller' => 'App\\Controller\\HomeController::indexAction'), array(), array(array('text', '/home')), array(), array()),
        'app_home_redirect' => array(array(), array('_controller' => 'App\\Controller\\HomeController::redirectAction'), array(), array(array('text', '/')), array(), array()),
        'app_home_redirect_1' => array(array(), array('_controller' => 'App\\Controller\\HomeController::redirectAction'), array(), array(array('text', '/')), array(), array()),
        'meteo' => array(array(), array('_controller' => 'App\\Controller\\MeteoController::index'), array(), array(array('text', '/meteo')), array(), array()),
        'raccolta' => array(array(), array('_controller' => 'App\\Controller\\RaccoltaController::index'), array(), array(array('text', '/raccolta')), array(), array()),
        'raccoltayear_show' => array(array('year'), array('_controller' => 'App\\Controller\\RaccoltaController::getDataFromYear'), array(), array(array('variable', '/', '[^/]++', 'year'), array('text', '/raccolta')), array(), array()),
        'user_registration' => array(array(), array('_controller' => 'App\\Controller\\RegistrationController::register'), array(), array(array('text', '/register')), array(), array()),
        'app_login' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::login'), array(), array(array('text', '/login')), array(), array()),
        'app_trees_treeslist' => array(array(), array('_controller' => 'App\\Controller\\TreesController::treesList'), array(), array(array('text', '/trees')), array(), array()),
        'tree_show' => array(array('cod'), array('_controller' => 'App\\Controller\\TreesController::showTree'), array(), array(array('variable', '/', '[^/]++', 'cod'), array('text', '/trees')), array(), array()),
        'task_delete' => array(array('id'), array('_controller' => 'App\\Controller\\TreesController::deleteTask'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/trees/delete')), array(), array()),
        'trees_list' => array(array(), array('_controller' => 'App\\Controller\\TreesListController::index'), array(), array(array('text', '/treeslist')), array(), array()),
        'app_logout' => array(array(), array(), array(), array(array('text', '/logout')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && (self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
            unset($parameters['_locale']);
            $name .= '.'.$locale;
        } elseif (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
