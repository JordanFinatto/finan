<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SeCriarUsuarioFuncionaTest extends TestCase
{
    use DatabaseTransactions;
    
    public function testeCriandoUsuario()
    {
        \App\Models\User::create([
            'name'=>'Admin User',
            'email'=>'admin@admin.com',
            'password'=>bcrypt(123456)
        ]);

        $this->assertDatabaseHas('users',['name'=>'Admin User']);
    }
}
