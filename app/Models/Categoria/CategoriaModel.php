<?php

namespace App\Models\Categoria;

// Importando modelo
use App\Models\Producto\ProductoModel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre'
    ];

    public function productos(){
        return $this->belongsToMany(ProductoModel::class);
    }
}
