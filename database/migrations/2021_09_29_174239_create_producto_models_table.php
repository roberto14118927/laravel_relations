<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_models', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('cantidad')->unsigned();
            $table->integer('vendedor_model_id')->unsigned();
            $table->timestamps();

            $table->foreign('vendedor_model_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto_models');
    }
}
