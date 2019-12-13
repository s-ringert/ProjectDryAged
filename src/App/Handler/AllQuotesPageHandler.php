<?php

namespace App\Handler;

use App\Service\QuoteService;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Expressive\Template\TemplateRendererInterface;

class AllQuotesPageHandler implements RequestHandlerInterface
{

    /** @var QuoteService */
    protected $quoteService;

    /** @var TemplateRendererInterface */
    protected $template;

    /**
     * AllQuotesPageHandler constructor.
     * @param QuoteService $quoteService
     * @param TemplateRendererInterface $template
     */
    public function __construct(QuoteService $quoteService, TemplateRendererInterface $template)
    {
        $this->quoteService = $quoteService;
        $this->template = $template;
    }

    /**
     * @inheritDoc
     */
    public function handle(ServerRequestInterface $request): ResponseInterface
    {

        $data = [
            'quoteList' => $this->quoteService->getAllQuotes(),
        ];

        return new HtmlResponse($this->template->render('app::all-quotes-page', $data));
    }
}
