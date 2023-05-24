<?php

namespace App\Models;

class BooksModel
{
    public function getBooks(): array
    {
        return [
            ['title' => 'Refactoring', 'author' => 'Martin Fowler'],
            ['title' => 'Test-Driven Development', 'author' => 'Kent Beck']
        ];
    }
}