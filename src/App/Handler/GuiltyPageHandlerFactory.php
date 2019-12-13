<?php

namespace App\Handler;

use App\Service\GuiltyService;
use DateTime;
use DateTimeZone;
use Interop\Container\ContainerInterface;
use Zend\Expressive\Template\TemplateRendererInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class GuiltyPageHandlerFactory implements FactoryInterface
{

    /**
     * @inheritDoc
     * @throws \Exception
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new GuiltyPageHandler(
            $container->get(GuiltyService::class),
            new DateTime('now', new DateTimeZone('Europe/Berlin')),
            $container->get(TemplateRendererInterface::class)
        );
    }
}
