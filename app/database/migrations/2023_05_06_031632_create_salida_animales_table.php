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
        Schema::create('salida_animales', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fechaSalida');
            $table->unsignedInteger('idAnimal');
            $table->enum('tipoSalida',['Adopción', 'Retorno a su hogar', 'Muerte', 'Otro']);
            $table->text('detalle')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salida_animales');
    }
};
