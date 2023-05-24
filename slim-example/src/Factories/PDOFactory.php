<?php

namespace App\Factories;

use PDO;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\ContainerInterface;
use Psr\Container\NotFoundExceptionInterface;

class PDOFactory
{
//    private const HOST = 'db';
//    private const DB = 'books';
    private const CHARSET = 'utf8mb4';
//    private const DSN = 'mysql:host=' . self::HOST
//    . ';dbname=' . self::DB . ';charset=' . self::CHARSET;
//    private const USER = 'root';
//    private const PASSWORD = 'password';

    private PDO $pdo;

    public function __construct(ContainerInterface $container)
    {
        $options = [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
//            $this->pdo = new PDO(self::DSN, self::USER, self::PASSWORD, $options);
            $settings = $container->get('settings')['db'];
            $this->pdo = new PDO($settings['host'] . $settings['name'], $settings['user'], $settings['password'], $options);
        } catch (\PDOException $e) {
            echo 'There was an error connecting to the db.';
            exit;
        } catch (NotFoundExceptionInterface $e) {
            echo 'Can\'t find the settings file in container';
            exit;
        } catch (ContainerExceptionInterface $e) {
            echo 'Can\'t find what the program needs in the container';
            exit;
        }
    }

    public function __invoke(): PDO
    {
        return $this->pdo;
    }
}
