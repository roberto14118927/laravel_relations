<?php

namespace App\Models\Pagar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PagarModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'cantidad',
        'comprador_id',
        'producto_id'
    ];

    // Agrear modelos a relacionar 
}
