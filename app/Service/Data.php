<?php

namespace App\Service;

use App\Model\Domain\Student;
use App\Interfaces\RuleInterface;

class Data {
    
    protected $student;
    protected $grades;
    protected $rule;
    
    public function __construct(Student $student, array $grades, RuleInterface $rule) {
        $this->student = $student;
        $this->grades = $grades;
        $this->rule = $rule;
    }
    
    public function get(): array
    {
        
    }
    
}
