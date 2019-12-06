<?php

namespace App\Handler;

use App\Service\GuiltyService;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Expressive\Template\TemplateRendererInterface;

class DemoPageHandler implements RequestHandlerInterface
{
    /** @var GuiltyService */
    protected $guiltyService;

    /** @var TemplateRendererInterface */
    protected $template;

    /**
     * DemoPageHandler constructor.
     * @param GuiltyService $guiltyService
     * @param TemplateRendererInterface $template
     */
    public function __construct(GuiltyService $guiltyService, TemplateRendererInterface $template)
    {
        $this->guiltyService = $guiltyService;
        $this->template = $template;
    }


    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $guiltyPerson = $this->guiltyService->getGuiltyPerson();
        $data = [
            'guiltyPerson' => $guiltyPerson
        ];

        return new HtmlResponse($this->template->render('app::demo-page', $data));
    }
}
