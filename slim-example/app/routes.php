<?php
declare(strict_types=1);

use App\Controllers\BookAddController;
use App\Controllers\BookFormController;
use App\Controllers\BookIdController;
use App\Controllers\BooksController;
use App\Controllers\CoursesAPIController;
use App\Controllers\myCallableClass;
use App\Controllers\StaffController;
use Slim\App;
use \Psr\Http\Message\RequestInterface;
use \Psr\Http\Message\ResponseInterface;
use Slim\Views\PhpRenderer;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $container = $app->getContainer();

    //demo code - two ways of linking urls to functionality, either via anon function or linking to a controller

    $app->get('/', function (RequestInterface $request, ResponseInterface $response, $args) use ($container) {
        $renderer = $container->get(PhpRenderer::class);
        return $renderer->render($response, "index.php", $args);
    });


    $app->get('/courses', CoursesAPIController::class);

// Types of Routes

    // Anon function - don't do it like this

    $app->get('/anon', function (RequestInterface $request, ResponseInterface $response, $args): ResponseInterface
    {
        $response->getBody()->write('hello from an anon function');
        return $response;
    });

    //Names function - not usually done this way

    $app->get('/named', 'namedfunc');

    //Class Method

    $app->get('/class', MyCallableClass::class);

    //Examples
    $app->get('/books[/]', BooksController::class);

    $app->get('/books/{id}', BookIDController::class);

    $app->get('/staff', StaffController::class);

    $app->get('/addbook', BookFormController::class);

    $app->post('/books', BookAddController::class);

};

function namedfunc (RequestInterface $request, ResponseInterface $response, $args): ResponseInterface
{
    $response->getBody()->write('hello from a named function');
    return $response;
}