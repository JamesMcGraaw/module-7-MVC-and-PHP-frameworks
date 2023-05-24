<?php

namespace App\Entities;

class Staffs
{
    private int $id;

    private string $name;

    private string $position;

    /**
     * @param int $id
     * @param string $name
     * @param string $position
     */
//    public function __construct(int $id = -1, string $name = "", string $position = "")
//    {
//        $this->id = $id;
//        $this->name = $name;
//        $this->position = $position;
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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getPosition(): string
    {
        return $this->position;
    }

    /**
     * @param string $position
     */
    public function setPosition(string $position): void
    {
        $this->position = $position;
    }

}
