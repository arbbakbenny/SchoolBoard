<?php

namespace App\Model\Repository;

use App\Model\Domain\Student;

class StudentRepository extends AbstractRepository {
    
    public function getAll()
    {
        return $this
                ->db
                ->query("SELECT * FROM students")
                ->fetchAll(\PDO::FETCH_CLASS, Student::class);
    }
    
}
