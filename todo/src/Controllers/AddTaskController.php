<?php

namespace App\Controllers;
use App\Models\TasksModel;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Views\PhpRenderer;

class AddTaskController
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
        $newTask = $request->getParsedBody();

        $forResponse = '<p>Task ';

        $newId = $this->tasksModel->addTask($newTask);
        if ($newId) {
            $forResponse .= $newId . ' saved successfully';
        } else {
            $forResponse .= 'not saved';
        }

        $forResponse .= '</p>'
                        .'<a href="./tasks">Go back to task list</a>';

        $response->getBody()->write($forResponse);
        return $response;
    }
}
