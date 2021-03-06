<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centros', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('nombre', 80)->unique();
            $table->string('slug', 90)->nullable();
            $table->string('file', 100)->nullable();
			$table->string('cadena_hotelera', 80)->nullable();
			$table->string('email', 60)->nullable();
			$table->string('telefono', 16);
			$table->string('direccion', 100);
			$table->Float('latitud', 10, 7)->nullable();
            $table->Float('longitud', 11, 7)->nullable();
			$table->string('horarios', 20);
			$table->timestamp('fecha_creacion')->useCurrent()->nullable();
            $table->timestamp('fecha_actualizacion')->useCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('centros');
    }
}
