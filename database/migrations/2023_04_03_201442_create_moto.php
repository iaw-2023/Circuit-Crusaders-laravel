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
        Schema::create('moto', function (Blueprint $table) {
            $table->id('id_moto');
            $table->string('marca');
            $table->string('modelo');
            $table->integer('anio');
            $table->string('cilindrada');
            $table->string('patente');
            $table->foreign('estilo')->references('codigo_estilo')->on('estilo')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('detalle')->references('nro_detalles')->on('detalles')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('moto');
    }
};
