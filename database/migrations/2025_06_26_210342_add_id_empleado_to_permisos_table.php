<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

public function up()
{
    Schema::table('permisos', function (Blueprint $table) {
        $table->unsignedBigInteger('id_empleado')->nullable()->after('id_estado');

        $table->foreign('id_empleado')
              ->references('id')
              ->on('empleados')
              ->onDelete('set null');
    });
}

public function down()
{
    Schema::table('permisos', function (Blueprint $table) {
        $table->dropForeign(['id_empleado']);
        $table->dropColumn('id_empleado');
    });
}

};
