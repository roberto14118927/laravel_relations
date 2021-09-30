<?php

namespace App\Models\Vendedor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// Importar el modelo
use App\Models\Pagar\ProductoModel;
use App\Models\User;

class VendedorModel extends User
{
    use HasFactory;

    public function productos(){
        return $this->hasMany(ProductoModel::class);
    }
}
