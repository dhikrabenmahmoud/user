<?php

namespace Container5Y3B0xI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getQuizzHistoryControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\QuizzHistoryController' shared autowired service.
     *
     * @return \App\Controller\QuizzHistoryController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'QuizzHistoryController.php';

        $container->services['App\\Controller\\QuizzHistoryController'] = $instance = new \App\Controller\QuizzHistoryController();

        $instance->setContainer(($container->privates['.service_locator.ULEwkxg'] ?? $container->load('get_ServiceLocator_ULEwkxgService'))->withContext('App\\Controller\\QuizzHistoryController', $container));

        return $instance;
    }
}
