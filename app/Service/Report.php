<?php

namespace App\Service;

use App\Model\Domain\Student;
use App\Interfaces\ConverterInterface;

class Report {
    
    public function createReport(Student $student, ConverterInterface $converter): ?string
    {
        return null;
    }
    
}
