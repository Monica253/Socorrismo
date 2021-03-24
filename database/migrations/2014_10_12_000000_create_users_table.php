<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
            $table->string('slug', 35)->nullable();
			$table->string('apellidos', 40)->nullable();
			$table->date('fecha_nacimiento', 10)->nullable();
			$table->string('direccion', 50)->nullable();
			$table->string('cod_postal', 50)->nullable();
			$table->string('telefono', 16)->nullable();
			$table->string('dni', 9)->unique()->nullable();
			$table->string('num_seg_social', 20)->unique()->nullable();
			$table->string('num_cuenta', 30)->unique()->nullable();
			$table->string('banco', 20)->nullable();
            $table->date('fecha_alta', 10)->nullable();
			$table->date('fecha_baja', 10)->nullable();
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
        Schema::dropIfExists('users');
    }
}
