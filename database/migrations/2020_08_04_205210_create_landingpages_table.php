<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLandingpagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landingpages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('desc');
            $table->string('nome_jogo');
            $table->string('imagebackground_superior')->nullable();
            $table->text('text_destq_tema');
            $table->string('frase');
            $table->rememberToken();
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
        //Schema::dropIfExists('role_permission_pivot');
        //Schema::dropIfExists('roles');
        Schema::dropIfExists('landingpages');
    }
}
