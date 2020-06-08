<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FestivalsData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('festivals', function(Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('country', 255);
            $table->string('city', 255);
            $table->dateTime('starts_at')->nullable();
            $table->dateTime('ends_at')->nullable();
            $table->string('music', 255)->nullable();
            $table->float('dayticket')->nullable();
            $table->float('wknd')->nullable();
            $table->float('3day')->nullable();
            $table->float('4day')->nullable();
            $table->float('5day')->nullable();
            $table->string('url', 4096)->nullable();
            $table->string('img', 255)->nullable();
            $table->timestamps();
        });

        Schema::create('festival_user', function(Blueprint $table) {
            $table->integer('festival_id')->index();
            $table->integer('user_id')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('festivals');
        Schema::dropIfExists('festival_user');
    }
}