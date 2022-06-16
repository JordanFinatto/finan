<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receita extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nome',
        'created_at',
        'updated_at'
    ];
}
