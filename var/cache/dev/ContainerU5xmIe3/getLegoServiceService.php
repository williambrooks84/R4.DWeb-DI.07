<?php

namespace ContainerU5xmIe3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLegoServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\LegoService' shared autowired service.
     *
     * @return \App\Service\LegoService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/LegoService.php';

        return $container->privates['App\\Service\\LegoService'] = new \App\Service\LegoService();
    }
}
