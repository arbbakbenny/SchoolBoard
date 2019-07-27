<?php

namespace App\Controller;

use App\Controller\AbstractController;
use App\Model\Repository\StudentRepository;
use Symfony\Component\HttpFoundation\Request;

class StudentController extends AbstractController {
    
    protected $repository;
    
    public function __construct(StudentRepository $repository) {
        $this->repository = $repository;
    }
    
    public function getStudent(int $id)
    {
        $student = $this->repository->find($id);
        echo json_encode($student);
    }
}
