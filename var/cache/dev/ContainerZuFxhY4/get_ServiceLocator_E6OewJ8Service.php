<?php

namespace ContainerZuFxhY4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_E6OewJ8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.E6OewJ8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.E6OewJ8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'post' => ['privates', '.errored..service_locator.E6OewJ8.App\\Entity\\Post', NULL, 'Cannot autowire service ".service_locator.E6OewJ8": it references class "App\\Entity\\Post" but no such service exists.'],
        ], [
            'post' => 'App\\Entity\\Post',
        ]);
    }
}
