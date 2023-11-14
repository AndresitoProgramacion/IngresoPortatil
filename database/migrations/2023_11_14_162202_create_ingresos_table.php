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
        Schema::create('ingresos', function (Blueprint $table) {
            $table->id('idIn');
            $table->usignedBigInteger('idCel');
            $table->usignedBigInteger('idApren');
            $table->usignedBigInteger('idPor');
            $table->String('fechaE');
            $table->String('fechaS');

            
            $table->foreign('idCel')->references('idCel')->on('celadores');
            $table->foreign('idApren')->references('idApren')->on('aprendices');
            $table->foreign('idPor')->references('idPor')->on('portatiles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingresos');
    }
};
