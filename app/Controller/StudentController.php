<?php

namespace App\Controller;

use App\Controller\AbstractController;
use App\Model\Repository\StudentRepository;
use App\Service\Report;
use App\Factory\Factory;
use App\Model\Domain\Student;
use App\Service\Data;

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
            
            $grades = $this->repository->getGrades($id);
            
            $data = new Data($student, $grades, Factory::resolveRule($student->board));
//            $this->report->createReport($data, Factory::resolveConverter($student->board));
        }
        
    }
}
