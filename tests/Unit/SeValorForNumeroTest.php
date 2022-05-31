<?php

namespace Tests\Unit;

use Tests\TestCase;
use Tests\Validator\RetornaSeValorForNumero;

final class SeValorForNumeroTest extends TestCase
{
    // anotação necessária para o PHPUnit interpretar o formato do teste
    /**
     * @dataProvider valueProvider
     */
    public function testeValorNumerico($value, $expectedResult)
    {
        $notEmptyValidator = new RetornaSeValorForNumero($value);

        $isNumero = $notEmptyValidator->isNumero();

        $this->assertEquals($expectedResult, $isNumero);
    }

    public function valueProvider()
    {
        return [
            'deveSerValidoQuandoValorForZero' => ['value' => 0, 'expectedResult' => true],
            'deveSerInvalidoQuandoValorForVazio' => ['value' => '', 'expectedResult' => false],
            'deveSerInvalidoQuandoValorForNegativo' => ['value' => -1, 'expectedResult' => true],
            'deveSerValidoQuandoValorForMaiorQueZero' => ['value' => 1, 'expectedResult' => true],
            'deveSerInvalidoQuandoValorForTexto' => ['value' => 'teste não numérico', 'expectedResult' => false]
        ];
    }
}

