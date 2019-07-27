<?php

namespace App\Factory;

use App\Interfaces\ConverterInterface;
use App\Interfaces\RuleInterface;
use App\Service\Rule\CSM;
use App\Service\Rule\CSMB;

class Factory {
    
    public static function resolveConverter(string $board): ConverterInterface
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
    
    public static function resolveRule(string $board): RuleInterface
    {
        switch ($board) {
            case "CSM":
                return new CSM();
                break;
            case "CSMB":
                return new CSMB();
                break;
        }
    }
    
}
