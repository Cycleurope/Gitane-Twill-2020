<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMessagesTables extends Migration
{
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {

            createDefaultTableFields($table);
            $table->string('title', 200)->nullable();
            $table->string('firstname', 64)->nullable();
            $table->string('lastname', 64)->nullable();
            $table->string('email', 64)->nullable();
            $table->string('address', 200)->nullable();
            $table->string('postalcode', 8)->nullable();
            $table->string('city', 128)->nullable();
            $table->text('message')->nullable();
            $table->string('status')->default('pending');

        });
    }

    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
