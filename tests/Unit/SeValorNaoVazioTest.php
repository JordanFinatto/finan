<?php

namespace Tests\Unit;

use Tests\TestCase;
use Tests\Validator\RetornaSeValorNaoVazio;

final class SeValorNaoVazioTest extends TestCase
{
    // anotação necessária para o PHPUnit interpretar o formato do teste
    /**
     * @dataProvider valueProvider
     */
    public function testeSeConteudoValido($value, $expectedResult)
    {
        $notEmptyValidator = new RetornaSeValorNaoVazio($value);

        $isValid = $notEmptyValidator->isValid();

        $this->assertEquals($expectedResult, $isValid);
    }

    public function valueProvider()
    {
        return [
            'deveSerValidoQuandoValorEstiverPreenchido' => ['value' => 'conteúdo válido', 'expectedResult' => true],
            'deveSerInvalidoQuandoValorNaoEstiverPreenchido' => ['value' => '', 'expectedResult' => false]
        ];
    }
}