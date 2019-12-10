<?php

namespace App\Handler;

use App\Service\GuiltyService;
use App\Service\QuoteService;
use DateTime;
use DateTimeZone;
use Interop\Container\ContainerInterface;
use Zend\Expressive\Template\TemplateRendererInterface;
use Zend\ServiceManager\Exception\ServiceNotCreatedException;
use Zend\ServiceManager\Exception\ServiceNotFoundException;
use Zend\ServiceManager\Factory\FactoryInterface;

class DemoPageHandlerFactory implements FactoryInterface
{

    /**
     * Create an object
     *
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param null|array $options
     *
     * @return object
     * @throws ServiceNotFoundException if unable to resolve the service.
     * @throws ServiceNotCreatedException if an exception is raised when
     * @throws \Exception
     *     creating a service
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {

        return new DemoPageHandler(
            $container->get(GuiltyService::class),
            $container->get(QuoteService::class),
            $container->get(TemplateRendererInterface::class),
            new DateTime('now', new DateTimeZone('Europe/Berlin'))
        );
    }
}
