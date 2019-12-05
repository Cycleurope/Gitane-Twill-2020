<?php

use Illuminate\Database\Migrations\Migration  ;
use Illuminate\Database\Schema\Blueprint  ;

class CreateSizesTables extends Migration
{
    public function up()
    {
        Schema::create('sizes', function (Blueprint $table) {
            
            createDefaultTableFields($table);
            $table->string('title' , 200)->nullable();
            $table->integer('size_number')->nullable();
            $table->char('size_char', 2)->nullable();
            $table->integer('position')->unsigned()->nullable();
        })  ;
    }

    public function down()
    {
        Schema::dropIfExists('sizes');
    }
}
