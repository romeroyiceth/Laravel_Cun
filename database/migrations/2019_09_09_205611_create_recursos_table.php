<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   /* public function up()
    {
        Schema::create('recursos', function (Blueprint $table) {
            $table->Increments('id');
            $table->Text('tipo_recurso');
            $table->String('nombre');
            $table->Integer('clase_id')->unsigned();
            $table->foreign('clase_id') ->references('id')->on('clases')->onDelete('cascade');
            $table->timestamps();
        });
    }
 */
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recursos');
    }
}
