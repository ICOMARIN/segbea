<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAyudantia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ayudantias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alumnos_id')->unsigned();
            $table->string('grupo_familiar');
            $table->string('ingreso_familiar');
            $table->string('vivienda_familiar');
            $table->integer('porcentage');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ayudantias');
    }
}
