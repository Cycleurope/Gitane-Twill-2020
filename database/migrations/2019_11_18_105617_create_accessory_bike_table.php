<?php

use Illuminate\Support\Facades\Schema  ;
use Illuminate\Database\Schema\Blueprint  ;
use Illuminate\Database\Migrations\Migration  ;

class CreateAccessoryBikeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accessory_bike', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('position')->unsigned();
            createDefaultRelationshipTableFields($table, 'bike', 'accessory')  ;
        })  ;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accessory_bike')  ;
    }
}
