<?php

namespace Tests\Unit;

use App\Despesa;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SeCriarDespesaFuncionaTest extends TestCase
{
    use DatabaseTransactions;
    
    public function testeCriandoReceita()
    {
        \App\Despesa::create([
            'nome'=>'Comida',
            'created_at'=>new \DateTime('now'),
            'updated_at'=>new \DateTime('now')
        ]);

        $this->assertDatabaseHas('despesas',['nome'=>'Comida']);
    }
}
