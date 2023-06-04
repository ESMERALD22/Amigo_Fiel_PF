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
        Schema::create('contratos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('idContrato',200);
            $table->date('fechaSalida');
            $table->unsignedInteger('idAnimal');
            $table->unsignedInteger('idAdoptante');
            $table->unsignedInteger('idSocio');
            $table->enum('estado',['valido','suspendido']);
            $table->text('observacion');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contratos');
    }
};
