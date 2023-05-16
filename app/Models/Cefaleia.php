<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cefaleia extends Model
{
    use HasFactory;
    protected $casts = [
        'fatores_desencadeantes' => 'array',
        'sintomas' => 'array'
    ];

	
}
