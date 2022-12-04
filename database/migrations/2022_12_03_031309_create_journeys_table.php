<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJourneysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journeys', function (Blueprint $table) {
            $table->id();
            $table->string('imgSrc')->nullable();
            $table->string('imgSrcCover')->nullable();
            $table->string('title');
            $table->string('time')->nullable();
            $table->integer('point')->default(0);
            $table->integer('bonus')->default(0);
            $table->string('bonus_description')->nullable();
            $table->text('end_description')->nullable();
            $table->integer('position')->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('journeys');
    }
}
