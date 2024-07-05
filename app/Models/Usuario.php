<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    public $timestamps = false;  // quando a minha model nao usa timestamp, use isso para desconsiderar quando aparece updated_at

    protected $fillable = [
        'nome',
        'email',
        'login', //fillable > campos de dados preenchíveis
        'senha',
        
    ];
}
