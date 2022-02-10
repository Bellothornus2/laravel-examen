<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean("caducable")->nullable(false)->change();
            $table->boolean("comentable")->nullable(false)->change();
            $table->string("acceso")->nullable(false)->change();
            $table->string("id_usuario")->nullable(false)->change();
            $table->string("titulo")->nullable(false)->change();
            $table->string("extracto");
            $table->string("contenido")->nullable(false)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post');
    }
};
