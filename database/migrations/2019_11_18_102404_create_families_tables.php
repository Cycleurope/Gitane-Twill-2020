<?php

use Illuminate\Database\Migrations\Migration  ;
use Illuminate\Database\Schema\Blueprint  ;

class CreateFamiliesTables extends Migration
{
    public function up()
    {
        Schema::create('families' , function (Blueprint $table) {
            
            // this will create an id ; a "published" column ; and soft delete and timestamps columns
            createDefaultTableFields($table);
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();
            $table->integer('position')->unsigned()->nullable();
        });

        // remove this if you're not going to use any translated field ; ie. using the HasTranslation trait. If you do use it ; create fields you want translatable in this table instead of the main table above. You do not need to create fields in both tables.
        Schema::create('family_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table , 'family');
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();
        });

        // remove this if you're not going to use slugs ; ie. using the HasSlug trait
        Schema::create('family_slugs' , function (Blueprint $table) {
            createDefaultSlugsTableFields($table , 'family');
        });

    }

    public function down()
    {
        Schema::dropIfExists('family_translations');
        Schema::dropIfExists('family_slugs');
        Schema::dropIfExists('families');
    }
}
