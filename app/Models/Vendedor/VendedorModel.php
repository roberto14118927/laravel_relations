<?php

namespace App\Models\Vendedor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// Importar el modelo
use App\Models\Producto\ProductoModel;
use App\Models\User;

class VendedorModel extends User
{
    use HasFactory;

    protected $table = 'users';
    // protected $table = 'producto_models';
    public function productos(){
        return $this->hasMany(ProductoModel::class);
    }
}
