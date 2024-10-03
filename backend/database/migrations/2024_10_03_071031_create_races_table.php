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
        Schema::create('races', function (Blueprint $table) {
            $table->id(); // Crea un campo 'id' autoincremental como clave primaria
            $table->string('name'); // Crea un campo para el nombre de la carrera
            $table->dateTime('date'); // Crea un campo para la fecha y hora de la carrera
            $table->timestamps(); // Crea campos 'created_at' y 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('races');
    }
};
