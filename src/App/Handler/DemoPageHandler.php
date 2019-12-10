<?php

namespace App\Handler;

use App\Service\GuiltyService;
use App\Service\QuoteService;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Expressive\Template\TemplateRendererInterface;

class DemoPageHandler implements RequestHandlerInterface
{
    /** @var GuiltyService */
    protected $guiltyService;

    /** @var QuoteService */
    protected $quoteService;

    /** @var TemplateRendererInterface */
    protected $template;

    /** @var \DateTime */
    protected $dateTime;

    /**
     * DemoPageHandler constructor.
     * @param GuiltyService $guiltyService
     * @param QuoteService $quoteService
     * @param TemplateRendererInterface $template
     * @param \DateTime $dateTime
     */
    public function __construct(
        GuiltyService $guiltyService,
        QuoteService $quoteService,
        TemplateRendererInterface $template,
        \DateTime $dateTime
    ) {
        $this->guiltyService = $guiltyService;
        $this->quoteService = $quoteService;
        $this->template = $template;
        $this->dateTime = $dateTime;
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {

        $quote = $this->quoteService->getQuoteOfTheDay();
        $guiltyPerson = $this->guiltyService->getGuiltyPerson();
        $data = [
            'guiltyPerson' => $guiltyPerson,
            'currentDateTime' => $this->dateTime,
            'quote' => $quote,
        ];

        return new HtmlResponse($this->template->render('app::demo-page', $data));
    }
}
