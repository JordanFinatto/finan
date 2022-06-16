<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;

class SeColunasUsuarioEstaoCorretasTest extends TestCase
{
    //** @test */
    public function testeColunasUsuarioCorretas()
    {
        $user = new User;

        $expected = [
            'name',
            'email',
            'password'
        ];

        $arrayCompared = array_diff($expected, $user->getFillable());

        $this->assertEquals(0, count($arrayCompared));
    }

    
}
