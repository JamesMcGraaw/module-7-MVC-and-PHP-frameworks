<?php

namespace App\Entities;

class Book
{
    private int $id;

    private string $title;

    private string $author;

    /**
     * @param string $title
     * @param string $author
     */
//    public function __construct(string $title, string $author)
//    {
//        $this->title = $title;
//        $this->author = $author;
//    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }


}