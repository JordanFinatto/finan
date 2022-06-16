<?php

namespace Tests\Unit;

use App\Receita;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SeCriarReceitaFuncionaTest extends TestCase
{
    use DatabaseTransactions;
    
    public function testeCriandoReceita()
    {
        \App\Receita::create([
            'nome'=>'FGTS',
            'created_at'=>new \DateTime('now'),
            'updated_at'=>new \DateTime('now')
        ]);

        $this->assertDatabaseHas('receitas',['nome'=>'FGTS']);
        
    }
}
