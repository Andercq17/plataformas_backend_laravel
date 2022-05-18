<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('libros', function (Blueprint $table) {
            $table->string('nombre_imagen');
            $table->string('autor');
            $table->float('precio');
            $table->integer('inventario');
            $table->boolean('disponible');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('libros', function (Blueprint $table) {
            $table->dropColumn('nombre_imagen');
            $table->dropColumn('autor');
            $table->dropColumn('precio');
            $table->dropColumn('inventario');
            $table->dropColumn('disponible');
        });
    }
};
