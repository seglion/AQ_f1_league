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
        Schema::create('predictions', function (Blueprint $table) {
            $table->id(); // ID
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Llave foránea a la tabla 'users'
            $table->foreignId('race_id')->constrained()->onDelete('cascade'); // Llave foránea a la tabla 'races'
            $table->string('pole_position'); // Pole Position
            $table->json('top8'); // Almacena el Top 8 en formato JSON
            $table->string('fastest_lap'); // Vuelta rápida
            $table->integer('lap_downs'); // Número de doblados
            $table->string('last_finisher'); // Último piloto que finalizó
            $table->string('team_driver_1'); // Piloto del primer equipo
            $table->string('winner'); // Ganador de la carrera
            $table->integer('points_obtained')->default(0); // Puntos obtenidos (por defecto 0)
            $table->timestamps(); // Timestamps para 'created_at' y 'updated_at'
            $table->unique(['user_id', 'race_id']);
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('predictions');
    }
};
