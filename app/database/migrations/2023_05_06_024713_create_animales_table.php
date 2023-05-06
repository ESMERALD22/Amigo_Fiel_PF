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
        Schema::create('animales', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('sexo', ['Hembra', 'Macho']);
            $table->unsignedInteger('idTipoAnimal');
            $table->enum('raza',['Raza', 'Mestizo']);
            $table->string('nombreRaza',100)->nullable();
            $table->string('nombre',100)->nullable();
            $table->date('fechaNacimiento')->nullable();
            $table->integer('edad')->nullable();
            $table->text('descripcion');
            $table->text('foto')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animales');
    }
};
