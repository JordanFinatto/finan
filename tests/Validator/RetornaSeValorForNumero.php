<?php

namespace Tests\Validator;

class RetornaSeValorForNumero
{
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function isNumero()
    {
        return is_numeric($this->value);
    }
}