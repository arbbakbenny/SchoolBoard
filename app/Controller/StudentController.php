<?php

namespace App\Controller;

use App\Controller\AbstractController;
use App\Model\Repository\StudentRepository;

class StudentController extends AbstractController {
    
    protected $repository;
    
    public function __construct(StudentRepository $repository) {
        $this->repository = $repository;
    }
    
    public function listStudents()
    {
        view("studentall.php", ["students" => $this->repository->getAll()] );
    }
}
