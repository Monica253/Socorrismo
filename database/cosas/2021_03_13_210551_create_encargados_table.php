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
			$table->string('nombre', 30);
            $table->string('slug', 35)->nullable();
			$table->string('apellidos', 40)->nullable();
			$table->date('fecha_nacimiento', 10);
			$table->string('direccion', 50);
			$table->string('cod_postal', 50);
			$table->string('telefono', 16);
			$table->string('email', 40);
			$table->string('dni', 9)->unique();
			$table->string('num_seg_social', 20)->unique();
			$table->string('num_cuenta', 30)->unique();
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
