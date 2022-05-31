<?php

namespace Tests\Unit;

use Tests\TestCase;
use Tests\Validator\RetornaSeDataMaiorQueAtual;

final class SeDataMaiorQueAtualTest extends TestCase
{
    // anotação necessária para o PHPUnit interpretar o formato do teste
    /**
     * @dataProvider valueProvider
     */
    public function testeSeDataMaiorQueAtual($value, $expectedResult)
    {
        $dataInserida = new \DateTime($value);
        $notEmptyValidator = new RetornaSeDataMaiorQueAtual($dataInserida);

        $isValid = $notEmptyValidator->isValid();

        $this->assertEquals($expectedResult, $isValid);
    }

    public function valueProvider()
    {
        return [
            'deveSerValidoQuandoDataForMenorQueAtual' => ['value' => '2022-05-29', 'expectedResult' => true],
            'deveSerInvalidoQuandoDataForMaiorQueAtual' => ['value' => '2025-12-01', 'expectedResult' => false]
        ];
    }
}