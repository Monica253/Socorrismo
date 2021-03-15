<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncargadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encargados', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('nombre', 30)->nullable();
            $table->string('slug', 35)->nullable();
			$table->string('apellidos', 40)->nullable();
			$table->date('f_nacimiento', 10)->nullable();
			$table->string('direccion', 50)->nullable();
			$table->string('cod_postal', 50)->nullable();
			$table->string('telefono', 16)->nullable();
			$table->string('email', 40)->nullable();
			$table->string('dni', 9)->unique()->nullable();
			$table->string('num_seg_social', 20)->unique()->nullable();
			$table->string('num_cuenta', 30)->unique()->nullable();
			$table->string('banco', 20)->nullable();
            $table->date('fecha_alta', 10)->nullable();
			$table->date('fecha_baja', 10)->nullable();
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
        Schema::dropIfExists('encargados');
    }
}
