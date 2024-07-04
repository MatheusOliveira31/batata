<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'email',
        'login', //fillable > campos de dados preenchíveis
        'senha',
        
    ];
}
