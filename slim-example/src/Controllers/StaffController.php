<?php

namespace App\Controllers;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Views\PhpRenderer;

class StaffController
{
    private PhpRenderer $renderer;

    public function __construct(PhpRenderer $phpRenderer)
    {
        $this->renderer = $phpRenderer;
    }

    public function __invoke(RequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
    {
        $staffs = [
            ['name' => 'Phil', 'position' => 'CEO'],
            ['name' => 'Adam', 'position' => 'CFO'],
            ['name' => 'Dom', 'position' => 'COO'],
        ];
        return $this->renderer->render($response, 'staffs.php', ['staffs' => $staffs]);
    }
}

