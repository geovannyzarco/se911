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
        Schema::create('compensados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_estado');
            $table->unsignedBigInteger('id_empleado')->nullable();
            $table->date('fecha_solicitud')->nullable();
            $table->text('justificacion')->nullable();
            $table->dateTime('desde')->nullable();
            $table->dateTime('hasta')->nullable();
            $table->text('adjunto')->nullable();
            $table->text('comentarios')->nullable();
            $table->timestamps();
             // Índice y clave foránea
             $table->foreign('id_estado')
             ->references('id')
             ->on('estados')
             ->onDelete('no action')
             ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compensados');
    }
};
