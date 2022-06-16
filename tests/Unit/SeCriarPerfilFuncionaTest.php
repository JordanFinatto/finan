<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SeCriarPerfilFuncionaTest extends TestCase
{
    use DatabaseTransactions;

    public function testeCriandoPerfil()
    {
        $user = \App\Models\User::create([
            'name'=>'Admin User',
            'email'=>'admin@admin.com',
            'password'=>bcrypt(123456)
        ]);

        $userProfile = \App\Models\UserProfile::create([
            'user_id'=>$user->id,
            'address'=>'42 Road St',
            'state'=>'FL',
            'zipcode'=>'32432'
        ]);

        $this->assertDatabaseHas('users',['name'=>'Admin User']);
        $this->assertDatabaseHas('user_profiles', ['user_id'=>$user->id, 'address'=>'42 Road St']);
    }
}
