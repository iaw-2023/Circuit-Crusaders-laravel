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
        Schema::create('detalles', function (Blueprint $table) {
            $table->id('nro_detalle');
            $table->timestamps();

            $table->unsignedBigInteger('id_pedido');
            $table->unsignedBigInteger('id_moto');


            $table->foreign('id_pedido')->references('nro_pedido')->on('pedidos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_moto')->references('nro_moto')->on('motos')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalles');
    }
};
