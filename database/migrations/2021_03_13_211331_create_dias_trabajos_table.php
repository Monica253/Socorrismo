<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiasTrabajosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dias_trabajos', function (Blueprint $table) {
            $table->increments('id');
			$table->foreignId('empleado_id')->unsigned()->index();
            $table->foreignId('encargado_id')->unsigned()->index()->nullable();
            $table->foreignId('centro_id')->unsigned()->index();
            $table->foreignId('piscina_id')->unsigned()->index();
			$table->date('fecha');
            $table->foreign('empleado_id')->references('id')->on('empleados')
				->onDelete('cascade');
			$table->foreign('encargado_id')->references('id')->on('encargados')
				->onDelete('cascade');
			$table->foreign('centro_id')->references('id')->on('centros')
				->onDelete('cascade');
            $table->foreign('piscina_id')->references('id')->on('piscinas')
				->onDelete('cascade');
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
        Schema::dropIfExists('dias_trabajos');
    }
}
