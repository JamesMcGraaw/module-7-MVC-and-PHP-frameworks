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
        return [
            new Task(1, 'Wash dog',0),
            new Task(2, 'Wash cat', 1)
        ];
//        $sql = 'SELECT `id`, `task`, `completed`
//            FROM `tasks`;';
//        $query = $this->db->prepare($sql);
//        $query->setFetchMode(PDO::FETCH_CLASS, Task::class);
//        $query->execute();
//        return $query->fetchAll();

    }

//    public function getTask(string $id)
//    {
//        $sql = 'SELECT `id`,
//            `task`,
//            `completed`
//            FROM `tasks`
//            WHERE `id` = :id;';
//        $query = $this->db->prepare($sql);
//        $query->setFetchMode(PDO::FETCH_CLASS, Task::class);
//        $params = ['id' => $id];
//        $query->execute($params);
//        return $query->fetch();
//    }

//    public function addTask(array $newTask): int
//    {
//        $sql = 'INSERT INTO `tasks` (`task`, `completed`)
//            VALUES (:task, :completed);';
//        $query = $this->db->prepare($sql);
//        $params = [
//            'task' => $newBook['task'],
//            'completed' => $newBook[0]
//        ];
//        $query->execute($params);
//        return $this->db->lastInsertId();
//    }
}
