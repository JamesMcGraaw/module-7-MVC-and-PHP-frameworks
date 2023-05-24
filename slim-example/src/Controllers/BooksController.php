<?php

namespace App\Controllers;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Views\PhpRenderer;

class BooksController
{

    private PhpRenderer $renderer;

    public function __construct(PhpRenderer $phpRenderer)
    {
        $this->renderer = $phpRenderer;
    }
    function __invoke(RequestInterface $request, ResponseInterface $response, $args): ResponseInterface
    {
//        $response->getBody()->write('hello from BooksController');
//        return $response;

        $data = [
            ['title' => 'Refactoring', 'author' => 'Martin Fowler'],
            ['title' => 'Test-Driven Development', 'author' => 'Kent Beck']
        ];
        return $this->renderer->render($response, 'books.php', ['books' => $data]);
    }
}
