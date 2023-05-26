<?php

namespace App\Entities;

class Task
{
    private int $id;

    private string $task;

    private int $completed;

    /**
     * @param int $id
     * @param string $task
     * @param int $completed
     */

// Did we ever find a way to make the constructor work?


//    public function __construct(int $id, string $task, int $completed)
//    {
//        $this->id = $id;
//        $this->task = $task;
//        $this->completed = $completed;
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
    public function getTask(): string
    {
        return $this->task;
    }

    /**
     * @param string $task
     */
    public function setTask(string $task): void
    {
        $this->task = $task;
    }

    /**
     * @return int
     */
    public function getCompleted(): int
    {
        return $this->completed;
    }

    /**
     * @param int $completed
     */
    public function setCompleted(int $completed): void
    {
        $this->completed = $completed;
    }
}
