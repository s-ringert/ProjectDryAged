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

    /** @var \DateTime */
    protected $dateTime;

    /**
     * DemoPageHandler constructor.
     * @param GuiltyService $guiltyService
     * @param TemplateRendererInterface $template
     * @param \DateTime $dateTime
     */
    public function __construct(GuiltyService $guiltyService, TemplateRendererInterface $template, \DateTime $dateTime)
    {
        $this->guiltyService = $guiltyService;
        $this->template = $template;
        $this->dateTime = $dateTime;
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $guiltyPerson = $this->guiltyService->getGuiltyPerson();
        $data = [
            'guiltyPerson' => $guiltyPerson,
            'currentDateTime' => $this->dateTime
        ];

        return new HtmlResponse($this->template->render('app::demo-page', $data));
    }
}
