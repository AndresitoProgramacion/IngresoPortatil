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
        Schema::create('celadores', function (Blueprint $table) {
            $table->id('idCel');
            $table->String('nombreCelador');
            $table->String('identificacion');
            $table->String('Usuario');
            $table->String('Contraseña');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('celadores');
    }
};
