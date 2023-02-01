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
        Schema::create('logro_c_s', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('cedula');
            $table->string('partido');
            $table->integer('numlista');
            $table->integer('votos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logro_c_s');
    }
};
