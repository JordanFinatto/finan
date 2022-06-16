<?php

namespace Tests\Unit;

use Tests\TestCase;
use Tests\Validator\RetornaSeDataMenorQueAtual;

final class SeDataMenorQueAtualTest extends TestCase
{
    // anotação necessária para o PHPUnit interpretar o formato do teste
    /**
     * @dataProvider valueProvider
     */
    public function testeSeDataMenorQueAtual($value, $expectedResult)
    {
        $dataInserida = new \DateTime($value);
        $notEmptyValidator = new RetornaSeDataMenorQueAtual($dataInserida);

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