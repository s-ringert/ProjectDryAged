<?php

namespace App\Handler;

use App\Service\QuoteService;
use Interop\Container\ContainerInterface;
use Zend\Expressive\Template\TemplateRendererInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class AllQuotesPageHandlerFactory implements FactoryInterface
{

    /**
     * @inheritDoc
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new AllQuotesPageHandler(
            $container->get(QuoteService::class),
            $container->get(TemplateRendererInterface::class)
        );
    }
}
