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
        Schema::create('propiedades', function (Blueprint $table) {
            $table->id('codigoPropiedad');
            $table->string('color', 30);
            $table->double('metros');
            $table->string('tipoPropiedad', 50);
            $table->double('costoxmtr',12,2)->default(100.00);
            $table->integer('codigoDuenio');
            $table->text('direccion',1000);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propiedades');
    }
};
