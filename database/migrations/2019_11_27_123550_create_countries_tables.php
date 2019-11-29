<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCountriesTables extends Migration
{
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            $table->string('title', 200)->nullable();
            $table->char('alpha2', 2)->nullable();
            $table->char('alpha3', 3)->nullable();

        });

        // remove this if you're not going to use any translated field, ie. using the HasTranslation trait. If you do use it, create fields you want translatable in this table instead of the main table above. You do not need to create fields in both tables.
        Schema::create('country_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'country');
            $table->string('title', 200)->nullable();
        });

    }

    public function down()
    {
        Schema::dropIfExists('country_revisions');
        Schema::dropIfExists('country_translations');
    }
}
