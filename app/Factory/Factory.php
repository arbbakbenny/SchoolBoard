<?php

namespace App\Factory;

use App\Interfaces\ConverterInterface;
use App\Interfaces\RuleInterface;
use App\Service\Rule\CSM;
use App\Service\Rule\CSMB;
use App\Converter\JsonConverter;

class Factory {
    
    public static function resolveConverter(string $board)
    {
        switch ($board) {
            case "CSM":
                $c = new JsonConverter();
                break;
            case "CSMB":
                $c = new JsonConverter();
                break;
        }
        
        return $c;
    }
    
    public static function resolveRule(string $board): RuleInterface
    {
        switch ($board) {
            case "CSM":
                return new CSM();
                break;
            case "CSMB":
                return new CSMB();
                break;
            default:
                throw new Exception("Unknown");
        }
    }
    
}
