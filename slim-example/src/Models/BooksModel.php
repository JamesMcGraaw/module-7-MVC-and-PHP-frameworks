<?php

namespace App\Models;

use App\Entities\Book;
use PDO;

class BooksModel
{
    private PDO $db;
    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }
    public function getBooks(): array
    {
//        return [
//            ['title' => 'Refactoring', 'author' => 'Martin Fowler'],
//            ['title' => 'Test-Driven Development', 'author' => 'Kent Beck']
//        ];
//        return [
//            new Book ('Refactoring','Martin Fowler'),
//            new Book('Test-Driven Development', 'Kent Beck')
//        ];
        $sql = 'SELECT `id`, `title`, `author`
            FROM `books`;';
        $query = $this->db->prepare($sql);
        $query->setFetchMode(PDO::FETCH_CLASS, Book::class);
        $query->execute();
        return $query->fetchAll();

    }

    public function getBook(string $id)
    {
        $sql = 'SELECT `id`,
            `title`,
            `author`
            FROM `books`
            WHERE `id` = :id;';
        $query = $this->db->prepare($sql);
        $query->setFetchMode(PDO::FETCH_CLASS, Book::class);
        $params = ['id' => $id];
        $query->execute($params);
        return $query->fetch();
    }
}