<?php

namespace App\Model\Domain;

class Grade {
    
    public function getGrade(): int
    {
        return $this->value;
    }
    
}
