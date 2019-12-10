<?php

use Illuminate\Database\Migrations\Migration  ;
use Illuminate\Database\Schema\Blueprint  ;

class CreateGeometriesTables extends Migration
{
    public function up()
    {
        Schema::create('geometries',  function (Blueprint $table) {
            
            createDefaultTableFields($table);
            $table->string('title', 200)->nullable();
            $table->string('geometry_type', 200)->nullable();
            
        });

    }

    public function down()
    {
        Schema::dropIfExists('geometries');
    }
}
