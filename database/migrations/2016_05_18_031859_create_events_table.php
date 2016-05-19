<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('start_month');
            $table->integer('start_day');
            $table->integer('start_year');
            $table->integer('end_month');
            $table->integer('end_day');
            $table->integer('end_year');
            $table->string('street_address');
            $table->string('city');
            $table->string('state');
            $table->string('venue_details')->nullable();
            $table->string('venue_name')->nullable();
            $table->string('details')->nullable();
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
        Schema::drop('events');
    }
}


