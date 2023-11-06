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
        // Migracion de la tabla Ocupaciones con sus diferentes campos
        Schema::create('ocupaciones', function (Blueprint $table) {
            $table->id();
            $table->string("codigo_ocupacion", 10);
            $table->string("nombre_ocupacion", 200);
            $table->text("descripcion");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ocupaciones');
    }
};
