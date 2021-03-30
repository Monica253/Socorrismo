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
			$table->foreignId('user_id')->unsigned()->index();
            $table->foreignId('centro_id')->unsigned()->index();
            $table->foreignId('piscina_id')->unsigned()->index();
			//$table->date('fecha_trabajo', 10);
            $table->date('fecha_inicio', 10);
            $table->date('fecha_fin', 10);
            $table->string('horarios', 20);
            $table->foreign('user_id')->references('id')->on('users')
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
