<?php

namespace App\Service;

use DateTime;
use DateTimeZone;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class GuiltyServiceFactory implements FactoryInterface
{

    /**
     * @inheritDoc
     * @throws \Exception
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new GuiltyService(
            new DateTime('now', new DateTimeZone('Europe/Berlin'))
        );
    }
}
