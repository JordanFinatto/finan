<?php

namespace Tests\Validator;

use DateTime;

class RetornaSeDataMenorQueAtual
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