<?php

namespace App\Controllers;

use App\Models\BooksModel;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\RequestInterface;
use Slim\Views\PhpRenderer;

class BookAddController
{
    private BooksModel $booksModel;
    private PhpRenderer $renderer;

    public function __construct(BooksModel $booksModel, PhpRenderer $renderer)
    {
        $this->booksModel = $booksModel;
        $this->renderer = $renderer;
    }

    public function __invoke(RequestInterface $request,
                             ResponseInterface $response,
                             array $args): ResponseInterface
    {
        $newBook = $request->getParsedBody();

        $forResponse = '<p>Book ';

        // use model to add data to database
        $newId = $this->booksModel->addBook($newBook);
        if ($newId) {
            $forResponse .= $newId . ' saved successfully</p>';
        } else {
            $forResponse .= 'not saved';
        }

        $forResponse .= '</p>';

        $response->getBody()->write($forResponse);
        return $response;
    }
}










