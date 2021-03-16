<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePiscinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('piscinas', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('nombre', 50)->unique()->nullable();
            $table->string('slug', 55)->nullable();
			$table->foreignId('centro_id')->unsigned()->index();
			$table->string('observaciones', 100)->nullable();
			$table->timestamp('fecha_creacion')->useCurrent()->nullable();
            $table->timestamp('fecha_actualizacion')->useCurrent()->nullable();
			$table->foreign('centro_id')->references('id')->on('centros')
				->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('piscinas');
    }
}
