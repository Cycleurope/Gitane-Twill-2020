<?php

use Illuminate\Support\Facades\Schema  ;
use Illuminate\Database\Schema\Blueprint  ;
use Illuminate\Database\Migrations\Migration  ;

class CreateBikeGeometryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bike_geometry' , function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('position')->unsigned();
            createDefaultRelationshipTableFields($table, 'bike', 'geometry');

        })  ;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bike_geometry');
    }
}
