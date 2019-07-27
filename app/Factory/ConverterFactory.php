<?php

namespace App\Factory;

use App\Interfaces\ConverterInterface;

class ConverterFactory {
    
    public static function resolve(string $board): ConverterInterface
    {
        switch ($board) {
            case "CSM":
                return new \App\Converter\JsonConverter();
                break;
            case "CSMB":
                return new \App\Converter\JsonConverter();
                break;
        }
    }
    
}
