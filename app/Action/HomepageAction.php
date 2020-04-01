<?php declare(strict_types=1);

namespace App\Action;

use Laminas\Diactoros\Response\HtmlResponse;
use League\Plates\Engine;
use Psr\Http\Message\ResponseInterface;

class HomepageAction
{
    /**
     * @var Engine
     */
    private $template;

    public function __construct(Engine $template)
    {
        $this->template = $template;
    }

    public function __invoke(): ResponseInterface
    {
        return new HtmlResponse(
            $this->template->render('home')
        );
    }
}
