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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_categoria');
            $table->unsignedBigInteger('id_estado_empleado');
            $table->unsignedBigInteger('id_unidad');
            $table->unsignedBigInteger('id_grupo');
            $table->string('codigo')->nullable();
            $table->string('nombre', 200)->nullable();
            $table->timestamps();


            // Índices y claves foráneas
            $table->foreign('id_categoria')
                  ->references('id')
                  ->on('categorias')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('id_estado_empleado')
                  ->references('id')
                  ->on('estados_empleados')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('id_grupo')
                  ->references('id')
                  ->on('grupos')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('id_unidad')
                  ->references('id')
                  ->on('unidades')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
