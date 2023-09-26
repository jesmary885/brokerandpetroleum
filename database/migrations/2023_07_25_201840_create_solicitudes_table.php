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
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('tipo_solicitud')->nullable();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('producto_id');
            $table->foreign('producto_id')->references('id')->on('productos');

            $table->string('cantidad')->nullable();
            $table->string('unidad')->nullable();
            $table->string('frecuencia')->nullable();
            $table->dateTime('fecha_requerida')->nullable();
            $table->string('uso_producto')->nullable();

            $table->string('respuesta_adjunta')->nullable();
            $table->longtext('respuesta_mensaje')->nullable();
            $table->string('respuesta_archivo')->nullable();

            $table->longText('comentario')->nullable();
            $table->string('status')->nullable();


            
            

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitudes');
    }
};
