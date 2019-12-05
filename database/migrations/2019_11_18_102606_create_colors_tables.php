<?php

use Illuminate\Database\Migrations\Migration  ;
use Illuminate\Database\Schema\Blueprint  ;

class CreateColorsTables extends Migration
{
    public function up()
    {
        Schema::create('colors', function (Blueprint $table) {
            createDefaultTableFields($table);
            $table->string('title', 200)->nullable();
            $table->integer('position')->unsigned()->nullable();
        })  ;

        Schema::create('color_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'color');
            $table->string('title', 200)->nullable();
            $table->string('color', 200)->nullable();
            $table->string('decal', 200)->nullable();
        })  ;
    }

    public function down()
    {
        Schema::dropIfExists('color_translations');
        Schema::dropIfExists('colors');
    }
}
