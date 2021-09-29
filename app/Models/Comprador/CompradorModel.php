<?php

namespace App\Models\Comprador;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// Importar el modelo
use App\Models\Pagar\PagarModel;

class CompradorModel extends User
{
    use HasFactory;

    public function pagos(){
        return $this->hasMany(PagarModel::class);
    }
}
