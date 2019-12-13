<?php

namespace App\Handler;

use App\Service\QuoteService;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Expressive\Template\TemplateRendererInterface;

class QuotePageHandler implements RequestHandlerInterface
{
    /** @var QuoteService */
    protected $quoteService;
    /** @var TemplateRendererInterface */
    protected $template;
    /** @var \DateTime */
    protected $dateTime;

    /**
     * QuotePageHandler constructor.
     * @param QuoteService $quoteService
     * @param TemplateRendererInterface $template
     * @param \DateTime $dateTime
     */
    public function __construct(QuoteService $quoteService, TemplateRendererInterface $template, \DateTime $dateTime)
    {
        $this->quoteService = $quoteService;
        $this->template = $template;
        $this->dateTime = $dateTime;
    }

    /**
     * @inheritDoc
     */
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $quote = $this->quoteService->getQuoteOfTheDay();
        $data = [
            'quote' => $quote,
            'currentDateTime' => $this->dateTime,
        ];

        return new HtmlResponse($this->template->render('app::quote-page', $data));
    }
}
