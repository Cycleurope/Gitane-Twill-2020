<?php

use Illuminate\Database\Migrations\Migration  ;
use Illuminate\Database\Schema\Blueprint  ;

class CreateStoresTables extends Migration
{
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            createDefaultTableFields($table)  ;
            $table->string('title', 200)->nullable()  ;
            $table->string('name', 200)->nullable()  ;
            $table->string('code', 16)->nullable()  ;
            $table->string('address1', 200)->nullable()  ;
            $table->string('address2', 200)->nullable()  ;
            $table->string('postalcode', 200)->nullable()  ;
            $table->string('city', 200)->nullable()  ;
            $table->string('phone', 200)->nullable()  ;
            $table->string('email', 200)->nullable()  ;
            $table->string('latitude', 200)->nullable()  ;
            $table->string('longitude', 200)->nullable()  ;
            $table->integer('position')->unsigned()->nullable()  ;
        })  ;
    }

    public function down()
    {
        Schema::dropIfExists('stores')  ;
    }
}
