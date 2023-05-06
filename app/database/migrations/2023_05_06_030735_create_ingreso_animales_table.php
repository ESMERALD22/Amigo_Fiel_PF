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
        Schema::create('ingreso_animales', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fechaIngreso');
            $table->unsignedInteger('idAnimal');
            $table->unsignedInteger('idHogar');
            $table->text('procedencia');
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
        Schema::dropIfExists('ingreso_animales');
    }
};
