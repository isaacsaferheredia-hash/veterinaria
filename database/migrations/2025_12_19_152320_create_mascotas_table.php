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
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id();
            $table->string('nombreMascota',15);
            $table->string('especie',15);
            $table->string('raza',15);
            $table->integer('edad');
            $table->string('sexo',10);
            $table->string('nombreDueño',15);
            $table->string('apellidoDueño',15);
            $table->string('telefono',10);
            $table->string('observaciones',100)->nullable();
            $table->string('estado',10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mascotas');
    }
};
