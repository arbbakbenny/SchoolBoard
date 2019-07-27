<?php

namespace App\Interfaces;

use App\Model\Domain\Student;

interface ConverterInterface {
    
    public function convert(Student $student): string;
    
}
