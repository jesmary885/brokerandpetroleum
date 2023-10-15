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
        Schema::create('negociacions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('commission')->nullable();
            $table->string('quantity')->nullable();
            $table->string('unity')->nullable();
            $table->string('frequency')->nullable();
            $table->date('date_required')->nullable();
            $table->string('product_use')->nullable();
            $table->string('comments')->nullable();
            $table->string('activity')->nullable();
            $table->string('postal_code')->nullable();

            $table->unsignedBigInteger('fase_id');
            $table->foreign('fase_id')->references('id')->on('fases');

            $table->unsignedBigInteger('producto_id');
            $table->foreign('producto_id')->references('id')->on('productos');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('proveedor_id')->nullable();
            $table->foreign('proveedor_id')->references('id')->on('proveedors');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('negociacions');
    }
};
