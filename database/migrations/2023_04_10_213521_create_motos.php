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
        Schema::create('motos', function (Blueprint $table) {
            $table->id('nro_moto');
            $table->timestamps();
            $table->string('marca');
            $table->string('modelo');
            $table->double('monto');
            $table->integer('anio');
            $table->string('cilindrada');
            $table->string('patente');
            $table->unsignedBigInteger('id_estilo');

            $table->foreign('id_estilo')->references('nro_estilo')->on('estilos')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motos');
    }
};
