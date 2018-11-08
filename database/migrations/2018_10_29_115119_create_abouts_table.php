<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumText('intro')->nullable();
            $table->mediumText('aims')->nullable();
            $table->mediumText('times')->nullable();
            $table->longText('fees')->nullable();
            $table->longText('rates')->nullable();
            $table->mediumText('funding')->nullable();
            $table->mediumText('registration')->nullable();
            $table->mediumText('involvement')->nullable();
            $table->mediumText('policies')->nullable();
            $table->mediumText('policy_file')->nullable();
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
        Schema::dropIfExists('abouts');
    }
}
