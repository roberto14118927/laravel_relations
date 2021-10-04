<?php

namespace App\Models\Producto;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Importando modelo 
use App\Models\Categoria\CategoriaModel;
use App\Models\Vendedor\VendedorModel;
use App\Models\Pagar\PagarModel;

class ProductoModel extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nombre',
        'cantidad',
        'vendedor_model_id'
    ];

    public function categorias()
    {
        return $this->belongsToMany(CategoriaModel::class);
    }

    public function vendedor()
    {
        return $this->belongsTo(VendedorModel::class);
    }

    public function pagar()
    {
        return $this->hasMany(PagarModel::class);
    }
}
