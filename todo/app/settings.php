<?php
declare(strict_types=1);

use DI\ContainerBuilder;
use Monolog\Logger;

return function (ContainerBuilder $containerBuilder) {

    $containerBuilder->addDefinitions([
        'settings' => [
            'displayErrorDetails' => true,
            'renderer' => [
                'template_path' => __DIR__ . '/../templates/',
            ],
            'logger' => [
                'name' => 'slim-app',
                'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
                'level' => Logger::DEBUG,
            ],
            'db' => [
                'host' => 'mysql:host=db;',
                'name' => 'dbname=tasks',
                'user' => 'root',
                'password' => 'password',
                'debug' => true
            ]
        ],
    ]);
};
