<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hogares', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombreEncargado',100);
            $table->string('telefono1',8);
            $table->string('telefono2',8)->nullable();
            $table->string('direccion',100);
            $table->text('descripcionLugar');
            $table->text('animalesPropios');
            $table->text('miembrosFam');
            $table->text('tiempoDisponible');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
                });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hogares');
    }
};
