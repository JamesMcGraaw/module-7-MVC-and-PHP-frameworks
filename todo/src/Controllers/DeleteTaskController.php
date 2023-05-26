<?php

namespace App\Controllers;
use App\Models\TasksModel;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Views\PhpRenderer;

class DeleteTaskController
{
    private TasksModel $tasksModel;
    private PhpRenderer $renderer;

    public function __construct(TasksModel $tasksModel, PhpRenderer $renderer)
    {
        $this->tasksModel = $tasksModel;
        $this->renderer = $renderer;
    }

    public function __invoke(RequestInterface  $request,
                             ResponseInterface $response,
                             array             $args): ResponseInterface
    {
        $argsAsInt = $args['taskNumber'];

        $this->tasksModel->deleteTask($argsAsInt);

        $forResponse = '<p> Deleted Successfully</p>'
            .'<a href="../tasks">Go back to task list</a>';

        $response->getBody()->write($forResponse);
        return $response;
    }
}
