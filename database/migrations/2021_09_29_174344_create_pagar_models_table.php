<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagarModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagar_models', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad')->unsigned();
            $table->integer('comprador_model_id')->unsigned();
            $table->integer('producto_model_id')->unsigned();
            $table->timestamps();

            // Creando referencias 
            // * Comprador
            // * Producto
            $table->foreign('comprador_model_id')->references('id')->on('users');
            $table->foreign('producto_model_id')->references('id')->on('producto_models');


            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagar_models');
    }
}
