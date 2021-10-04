<?php

namespace App\Models\Comprador;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// Importar el modelo
use App\Models\Pagar\PagarModel;
use App\Models\User;

class CompradorModel extends User
{
    use HasFactory;
    protected $table = 'users';

    public function pagos(){
        return $this->hasMany(PagarModel::class);
    }
}
