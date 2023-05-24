<?php

namespace App\Factories;

use PDO;

class PDOFactory
{
    private const HOST = 'db';
    private const DB = 'books';
    private const CHARSET = 'utf8mb4';
    private const DSN = 'mysql:host=' . self::HOST
    . ';dbname=' . self::DB . ';charset=' . self::CHARSET;
    private const USER = 'root';
    private const PASSWORD = 'password';

    private PDO $pdo;

    public function __construct()
    {
        $options = [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            $this->pdo = new PDO(self::DSN, self::USER, self::PASSWORD, $options);
        } catch (\PDOException $e) {
            echo 'There was an error connecting to the db.';
            exit;
        }
    }

    public function __invoke(): PDO
    {
        return $this->pdo;
    }
}
