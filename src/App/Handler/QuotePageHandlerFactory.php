<?php

namespace App\Handler;

use App\Service\QuoteService;
use DateTime;
use DateTimeZone;
use Interop\Container\ContainerInterface;
use Zend\Expressive\Template\TemplateRendererInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class QuotePageHandlerFactory implements FactoryInterface
{

    /**
     * @inheritDoc
     * @throws \Exception
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new QuotePageHandler(
            $container->get(QuoteService::class),
            $container->get(TemplateRendererInterface::class),
            new DateTime('now', new DateTimeZone('Europe/Berlin'))
        );
    }
}
