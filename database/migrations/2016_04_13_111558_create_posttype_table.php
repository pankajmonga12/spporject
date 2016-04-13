<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePosttypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posttype', function (Blueprint $table) {
            $table->increments('id');
            $table->string('posttype');
            $table->integer('qualificatiion');
            $table->integer('eligibility');
            $table->integer('no_of_post');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posttype');
    }
}
