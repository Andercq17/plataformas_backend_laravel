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
            $table->integer('inventario')->default(1)->change();
            $table->boolean('disponible')->default(1)->change();
        });
    }
    //https://www.coditty.com/code/laravel-migration-change-default-value-of-column
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('libros', function (Blueprint $table) {
            $table->integer('inventario')->default(NULL)->change();
            $table->boolean('disponible')->default(NULL)->change();
        });
    }
};
