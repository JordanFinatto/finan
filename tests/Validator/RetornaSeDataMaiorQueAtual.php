<?php

namespace Tests\Validator;

use DateTime;

class RetornaSeDataMaiorQueAtual
{
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function isValid()
    {
        return $this->value < new \DateTime('now');
    }
}