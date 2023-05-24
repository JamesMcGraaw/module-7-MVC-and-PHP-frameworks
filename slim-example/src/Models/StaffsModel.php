<?php

namespace App\Models;

use App\Entities\Staffs;
use PDO;

class StaffsModel
{
    private PDO $db;
    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function getStaffs(): array
    {
        $sql = 'SELECT `id`, `name`, `position`
            FROM `staff`;';
        $query = $this->db->prepare($sql);
        $query->setFetchMode(PDO::FETCH_CLASS, Staffs::class);
        $query->execute();
        return $query->fetchAll();
    }

}