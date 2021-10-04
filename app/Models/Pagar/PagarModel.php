<?php

namespace App\Models\Pagar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Importando modelos
use App\Models\Comprador\CompradorModel;
use App\Models\Producto\ProductoModel;

class PagarModel extends Model
{
    use HasFactory;

    

    protected $fillable = [
        'cantidad',
        'comprador_model_id',
        'producto_model_id'
    ];

    // Agrear modelos a relacionar 

    public function comprador(){
        return $this->belongsTo(CompradorModel::class);
    }

    public function productos(){
        return $this->belongsTo(ProductoModel::class);
    }
}
