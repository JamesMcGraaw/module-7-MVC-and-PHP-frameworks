<?php

namespace App\Controllers;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Views\PhpRenderer;

class BookFormController
{
    private PhpRenderer $renderer;

    public function __construct(PhpRenderer $renderer)
    {
        $this->renderer = $renderer;
    }

    public function __invoke(RequestInterface $request,
                             ResponseInterface $response,
                             array $args): ResponseInterface
    {
        return $this->renderer->render($response, "bookform.php", $args);
    }
}