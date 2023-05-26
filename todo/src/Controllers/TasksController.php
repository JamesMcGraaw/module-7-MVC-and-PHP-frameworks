<?php

namespace App\Controllers;

use App\Models\TasksModel;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Views\PhpRenderer;

class TasksController
{
    private PhpRenderer $renderer;
    private TasksModel $tasksModel;

    public function __construct(PhpRenderer $phpRenderer, TasksModel $tasksModel)
    {
        $this->renderer = $phpRenderer;
        $this->tasksModel = $tasksModel;
    }


    function __invoke(RequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
    {
        $data = $this->tasksModel->getTasks();
        return $this->renderer->render($response, 'tasks.php', ['tasks' => $data]);
    }
}
