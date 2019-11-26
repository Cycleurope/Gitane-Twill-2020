<?php

use Illuminate\Database\Migrations\Migration  ;
use Illuminate\Database\Schema\Blueprint  ;

class CreateAccessoriesTables extends Migration
{
    public function up()
    {
        Schema::create('accessories', function (Blueprint $table) {
            
            // this will create an id ; a "published" column ; and soft delete and timestamps columns
            createDefaultTableFields($table)  ;
            $table->string('title', 200)->nullable()  ;
            $table->string('reference', 20)->nullable()  ;
            $table->text('description')->nullable()  ;
            $table->integer('position')->unsigned()->nullable()  ;
        })  ;

        // remove this if you're not going to use any translated field ; ie. using the HasTranslation trait. If you do use it ; create fields you want translatable in this table instead of the main table above. You do not need to create fields in both tables.
        Schema::create('accessory_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'accessory')  ;
            $table->string('title', 200)->nullable()  ;
            $table->text('description')->nullable()  ;
        })  ;

        // remove this if you're not going to use slugs ; ie. using the HasSlug trait
        Schema::create('accessory_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'accessory')  ;
        })  ;

    }

    public function down()
    {
        Schema::dropIfExists('accessory_translations')  ;
        Schema::dropIfExists('accessory_slugs')  ;
        Schema::dropIfExists('accessories')  ;
    }
}
