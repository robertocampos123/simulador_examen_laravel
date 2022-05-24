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
        Schema::create('ciencias', function (Blueprint $table) {
            $table->id();
            $table->string('pregunta',100);
            $table->string('opcion_a',50);
            $table->string('opcion_b',50);
            $table->string('opcion_c',50);
            $table->string('respuesta',50);
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
        Schema::dropIfExists('ciencias');
    }
};
