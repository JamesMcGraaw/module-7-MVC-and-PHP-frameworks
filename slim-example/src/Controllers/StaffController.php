<?php

namespace App\Controllers;

use App\Models\StaffsModel;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Views\PhpRenderer;

class StaffController
{
    private PhpRenderer $renderer;

    private StaffsModel $staffsModel;

    public function __construct(PhpRenderer $phpRenderer, StaffsModel $staffsModel)
    {
        $this->renderer = $phpRenderer;
        $this->staffsModel = $staffsModel;
    }

    public function __invoke(RequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
    {
//        $staffs = [
//            ['name' => 'Phil', 'position' => 'CEO'],
//            ['name' => 'Adam', 'position' => 'CFO'],
//            ['name' => 'Dom', 'position' => 'COO'],
//        ];
        $data = $this->staffsModel->getStaffs();
        return $this->renderer->render($response, 'staffs.php', ['staffs' => $data]);
    }
}

