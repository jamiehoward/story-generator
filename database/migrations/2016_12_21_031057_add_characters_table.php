<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('suffix')->nullable();
            $table->integer('occupation_id')->nullable();
            $table->date('birthdate')->default('1900-01-01');
            $table->boolean('gender')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('character_story', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('character_id');
            $table->integer('story_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characters');
        Schema::dropIfExists('character_story');
    }
}
