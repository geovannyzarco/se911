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
        Schema::create('permisos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_tipo_permiso');
            $table->unsignedBigInteger('id_estado');
            $table->date('fecha_solicitud')->nullable();
            $table->dateTime('desde')->nullable();
            $table->dateTime('hasta')->nullable();
            $table->text('motivo')->nullable();
            $table->text('adjunto')->nullable();
            $table->text('comentario')->nullable();
            $table->timestamps();

            // Índices y claves foráneas
            $table->foreign('id_tipo_permiso')
                  ->references('id')
                  ->on('tipos_permisos')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('id_estado')
                  ->references('id')
                  ->on('estados')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permisos');
    }
};
