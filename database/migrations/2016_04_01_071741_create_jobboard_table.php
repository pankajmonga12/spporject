<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobboardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobboard', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category');
            $table->integer('subcategory');
            $table->string('job_name');
            $table->text('job_notification');
            $table->string('descipline');
            $table->dateTime('imp_date');
            $table->integer('no_of_post');
            $table->string('post_description');
            $table->integer('eligibility');
            $table->integer('qualification');
            $table->string('exp_req');
            $table->integer('age_limit');
            $table->string('how_to_apply');
            $table->integer('application_fees');
            $table->string('website_link');
            $table->string('logo');
            $table->string('detailed_notification');
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
        Schema::drop('jobboard');
    }
}
