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
            $table->dateTime('starts_at');
            $table->dateTime('ends_at');
            $table->string('music', 255);
            $table->string('dayticket', 10)->nullable();
            $table->integer('wknd')->nullable();
            $table->integer('3day')->nullable();
            $table->integer('4day')->nullable();
            $table->integer('5day')->nullable();
            $table->string('url', 4096);
            $table->string('img', 255);
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
        Schema::dropIfExists('festivals');
    }
}
