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
        Schema::create('documentos_negociacion', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('documentos_id');
            $table->foreign('documentos_id')->references('id')->on('documentos');

            $table->unsignedBigInteger('estados_procesos_documentos_id')->nullable();
            $table->foreign('estados_procesos_documentos_id')->references('id')->on('estados_procesos_documentos');

            $table->unsignedBigInteger('negociacion_id');
            $table->foreign('negociacion_id')->references('id')->on('negociacions');

            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documento_negociacions');
    }
};
