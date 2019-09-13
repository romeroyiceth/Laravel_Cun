<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEditoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('editores', function (Blueprint $table) {
            $table->Increments('id');
            $table->Integer('cedula')->unique();
            $table->String('nombre');
            $table->String('apellido');
            $table->String('correo');
            $table->Integer('telefono');
            $table->String('direccion');
            $table->text('contenido_cuenta');
            $table->integer('editorial_id')->unsigned();
            $table->foreign('editorial_id') ->references('id')->on('editoriales')->onDelete('cascade');
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
        Schema::dropIfExists('editores');
    }
}
