<?php

namespace App\Service;

use DateTime;
use DateTimeZone;
use Doctrine\ORM\EntityManager;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class QuoteServiceFactory implements FactoryInterface
{

    /**
     * @inheritDoc
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new QuoteService(
            $container->get(EntityManager::class),
            new DateTime('now', new DateTimeZone('Europe/Berlin'))
        );
    }
}
