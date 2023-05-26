<?php

namespace App\Models;

use App\Entities\Task;
use PDO;

class TasksModel
{
    private PDO $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }
    public function getTasks(): array
    {

        $sql = 'SELECT `id`, `task`, `completed`
            FROM `tasks`
            WHERE `completed` = 0;';
        $query = $this->db->prepare($sql);
        $query->setFetchMode(PDO::FETCH_CLASS, Task::class);
        $query->execute();
        return $query->fetchAll();

    }

    public function addTask(array $newTask): int
    {
        $sql = 'INSERT INTO `tasks` (`task`, `completed`)
            VALUES (:task, :completed);';
        $query = $this->db->prepare($sql);
        $params = [
            'task' => $newTask['task'],
            'completed' => 0
        ];
        $query->execute($params);
        return $this->db->lastInsertId();
    }

    public function markAsComplete(int $id): void
    {
        $sql = 'UPDATE `tasks`
                SET `completed` = 1
                WHERE `id` = :id;';

        $params = ['id' => $id];
        $query = $this->db->prepare($sql);
        $query->execute($params);
    }

    public function getCompletedTasks()
    {
        $sql = 'SELECT `id`, `task`, `completed`
            FROM `tasks`
            WHERE `completed` = 1;';
        $query = $this->db->prepare($sql);
        $query->setFetchMode(PDO::FETCH_CLASS, Task::class);
        $query->execute();
        return $query->fetchAll();
    }

    public function deleteTask(int $id): void
    {
        $sql = 'DELETE FROM `tasks`
                WHERE `id` = :id;';

        $params = ['id' => $id];
        $query = $this->db->prepare($sql);
        $query->execute($params);
    }
}
