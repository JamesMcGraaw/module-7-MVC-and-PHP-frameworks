<?php
declare(strict_types=1);

use App\Controllers\TasksController;
use Slim\App;
use Slim\Views\PhpRenderer;

return function (App $app) {
    $container = $app->getContainer();


    $app->get('/', function ($request, $response, $args) use ($container) {
        $renderer = $container->get(PhpRenderer::class);
        return $renderer->render($response, "index.php", $args);
    });

    $app->get('/tasks',TasksController::class);

};
