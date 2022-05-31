<?php

namespace Tests\Unit;

use Tests\TestCase;
use Tests\Validator\RetornaSeValorNegativo;

final class SeValorNegativoTest extends TestCase
{
    // anotação necessária para o PHPUnit interpretar o formato do teste
    /**
     * @dataProvider valueProvider
     */
    public function testeValorPositivo($value, $expectedResult)
    {
        $notEmptyValidator = new RetornaSeValorNegativo($value);

        $isPositivo = $notEmptyValidator->isPositivo();

        $this->assertEquals($expectedResult, $isPositivo);
    }

    public function valueProvider()
    {
        return [
            'deveSerValidoQuandoValorForZero' => ['value' => 0, 'expectedResult' => true],
            'deveSerValidoQuandoValorForMaiorQueZero' => ['value' => 1, 'expectedResult' => true],
            'deveSerInvalidoQuandoValorForMenorQueZero' => ['value' => -1, 'expectedResult' => false]
        ];
    }
}

