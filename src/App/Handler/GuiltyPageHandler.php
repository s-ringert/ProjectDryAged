<?php

namespace App\Handler;

use App\Service\GuiltyService;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Expressive\Template\TemplateRendererInterface;

class GuiltyPageHandler implements RequestHandlerInterface
{
    /** @var GuiltyService */
    protected $guiltyService;

    /** @var \DateTime */
    protected $dateTime;
    /** @var TemplateRendererInterface */
    protected $template;

    /**
     * GuiltyPageHandler constructor.
     * @param GuiltyService $guiltyService
     * @param \DateTime $dateTime
     * @param TemplateRendererInterface $template
     */
    public function __construct(GuiltyService $guiltyService, \DateTime $dateTime, TemplateRendererInterface $template)
    {
        $this->guiltyService = $guiltyService;
        $this->dateTime = $dateTime;
        $this->template = $template;
    }

    /**
     * @inheritDoc
     */
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $guiltyPerson = $this->guiltyService->getGuiltyPerson();
        $data = [
            'guiltyPerson' => $guiltyPerson,
            'currentDateTime' => $this->dateTime,
        ];

        return new HtmlResponse($this->template->render('app::guilty-page', $data));
    }
}
