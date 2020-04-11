<?php declare(strict_types=1);

namespace App\Http\View;

use Psr\Http\Message\ResponseInterface;
use Technikolor\Action\ViewAction;

class HomepageAction extends ViewAction
{
    public function __invoke(): ResponseInterface
    {
        return $this->view('home');
    }
}
