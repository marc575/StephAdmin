<?php

namespace Container3AuLENa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZGwis69Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.zGwis69' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zGwis69'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'coupon' => ['privates', '.errored..service_locator.zGwis69.App\\Entity\\Coupon', NULL, 'Cannot autowire service ".service_locator.zGwis69": it references class "App\\Entity\\Coupon" but no such service exists.'],
        ], [
            'coupon' => 'App\\Entity\\Coupon',
        ]);
    }
}
