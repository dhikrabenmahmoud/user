<?php

namespace Container5Y3B0xI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KSi0HkTService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.KSi0HkT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.KSi0HkT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'passwordEncoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', true],
            'user' => ['privates', '.errored..service_locator.KSi0HkT.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.KSi0HkT": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'passwordEncoder' => '?',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
