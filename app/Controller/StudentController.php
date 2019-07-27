<?php

namespace App\Controller;

use App\Controller\AbstractController;
use App\Model\Repository\StudentRepository;
use App\Service\Report;
use App\Factory\ConverterFactory;
use App\Model\Domain\Student;

class StudentController extends AbstractController {
    
    protected $repository;
    
    protected $report;
    
    public function __construct(
        StudentRepository $repository,
        Report $report
    ) {
        $this->repository = $repository;
        $this->report = $report;
    }
    
    public function getStudent(int $id)
    {
        $student = $this->repository->find($id);
        
        if ($student instanceof Student) {
            $this->report->createReport($student, ConverterFactory::resolve($student->board));
        }
        
    }
}
