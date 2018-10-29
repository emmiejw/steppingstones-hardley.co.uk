<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('daily_title')->nullable(); // routine timetable
            $table->time('daily_time')->nullable();
            $table->string('daily_activity')->nullable(); 
            $table->string('headings')->nullable(); 
            $table->mediumText('content')->nullable(); // LEARNING THROUGH PLAY, HOW WE PROVIDE FOR DEVELOPMENT AND LEARNING, Children's Daily Route
            $table->string('title')->nullable(); //  of the prime areas
            $table->mediumText('area')->nullable();
            $table->mediumText('description')->nullable();
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
        Schema::dropIfExists('routines');
    }
}
