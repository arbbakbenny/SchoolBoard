<?php

namespace App\Service;

use App\Model\Domain\Student;
use App\Interfaces\ConverterInterface;
use App\Service\Data;

class Report {
    
    public function createReport(Data $data, ConverterInterface $converter): ?string
    {
        echo $converter->convert($student->get());
    }
    
}
