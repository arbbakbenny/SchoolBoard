<?php

namespace App\Converter;

use App\Interfaces\ConverterInterface;

class JsonConverter implements ConverterInterface {
    
    public function convert(\App\Model\Domain\Student $student): string
    {
        return json_encode(get_object_vars($student));
    }

}
