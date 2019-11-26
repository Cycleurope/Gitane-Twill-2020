<?php

use Illuminate\Database\Migrations\Migration  ;
use Illuminate\Database\Schema\Blueprint  ;

class CreateBikesTables extends Migration
{
    public function up()
    {
        Schema::create('bikes', function (Blueprint $table) {
            createDefaultTableFields($table)  ;
            $table->string('reference', 20)->nullable()  ;
            $table->string('weight', 64)->nullable()  ;
            $table->integer('position')->unsigned()->nullable()  ;
            $table->boolean('price_from')->default(0)  ;
            $table->decimal('public_price' , 8, 2)->nullable()->default(0)  ;
            $table->string('datasheet_theme')->default('default')  ;
            $table->string('geometries_theme')->default('default')  ;
        })  ;

        Schema::create('bike_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'bike')  ;
            $table->string('title' , 200)->nullable()  ;
            $table->string('name' , 64)->nullable()  ;
            $table->string('subname' , 64)->nullable()  ;
            $table->text('description')->nullable()  ;
            $table->string('frame' , 64)->nullable()  ;
            $table->string('fork' , 64)->nullable()  ;
            $table->string('rear_suspension', 64)->nullable()  ;
            $table->string('engine', 64)->nullable()  ;
            $table->string('battery', 64)->nullable()  ;
            $table->string('distance_range', 64)->nullable()  ;
            $table->string('display', 64)->nullable()  ;
            $table->string('charger', 64)->nullable()  ;
            $table->string('rims', 64)->nullable()  ;
            $table->string('hubs', 64)->nullable()  ;
            $table->string('tires', 64)->nullable()  ;
            $table->string('shifters', 64)->nullable()  ;
            $table->string('rear_derailleur', 64)->nullable()  ;
            $table->string('front_derailleur', 64)->nullable()  ;
            $table->string('crankset', 64)->nullable()  ;
            $table->string('cassette', 64)->nullable()  ;
            $table->string('saddle', 64)->nullable()  ;
            $table->string('seatpost', 64)->nullable()  ;
            $table->string('handlebars', 64)->nullable()  ;
            $table->string('stem', 64)->nullable()  ;
            $table->string('brakes', 64)->nullable()  ;
            $table->string('mudguards', 64)->nullable()  ;
            $table->string('racks', 64)->nullable()  ;
            $table->string('chainguard', 64)->nullable()  ;
            $table->string('lightings', 64)->nullable()  ;
            $table->string('stand', 64)->nullable()  ;
            $table->string('pedals', 200)->nullable()  ;
            $table->string('transmission', 200)->nullable()  ;
            $table->string('plus', 200)->nullable()  ;
        })  ;

        Schema::create('bike_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'bike')  ;
        })  ;
    }

    public function down()
    {
        Schema::dropIfExists('bike_translations')  ;
        Schema::dropIfExists('bike_slugs')  ;
        Schema::dropIfExists('bikes')  ;
    }
}
