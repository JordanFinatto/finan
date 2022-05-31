<?php

namespace Tests\Validator;

class RetornaSeValorNegativo
{
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function isPositivo()
    {
        if($this->value < 0){
            return false;
         }else{
            return true;
         };
    }
}