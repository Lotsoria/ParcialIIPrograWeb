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
        Schema::create('aplicacion_vacunas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('persona_id');
            $table->foreign('persona_id') ->references('id') ->on('personas');
            $table->unsignedBigInteger('marcas_id');
            $table->foreign('marcas_id') ->references('id') ->on('marcas');
            $table->unsignedBigInteger('dosis_id');
            $table->foreign('dosis_id') ->references('id') ->on('dosis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aplicacion_vacunas');
    }
};
