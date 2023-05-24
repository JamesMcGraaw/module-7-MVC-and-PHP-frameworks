<?php

namespace App\Controllers;

use App\Models\BooksModel;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Views\PhpRenderer;

class BookIdController
{
    private PhpRenderer $renderer;
    private BooksModel $booksModel;

    public function __construct(PhpRenderer $phpRenderer, BooksModel $booksModel)
    {
        $this->renderer = $phpRenderer;
        $this->booksModel = $booksModel;
    }
    function __invoke(RequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
    {
        $id = $args['id'];
        $data = $this->booksModel->getBook($id);
        return $this->renderer->render($response, 'book.php', ['book' => $data]);
    }
}
