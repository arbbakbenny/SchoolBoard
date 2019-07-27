<?php

namespace App\Converter;

use App\Interfaces\ConverterInterface;
use App\Service\Data;

class JsonConverter implements ConverterInterface {
    
    public function convert(Data $data): string
    {
        return json_encode(get_object_vars($data));
    }

}
