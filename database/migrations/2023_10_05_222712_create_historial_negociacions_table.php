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
        Schema::create('historial_negociacions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->longText('comentario')->nullable();

            $table->longText('comentario_automatico_sistema')->nullable();

            $table->unsignedBigInteger('negociacion_id');
            $table->foreign('negociacion_id')->references('id')->on('negociacions');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historial_negociacions');
    }
};
