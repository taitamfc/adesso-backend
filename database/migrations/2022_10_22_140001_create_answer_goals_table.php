<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswerGoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_goals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('my_goal_id');
            $table->unsignedBigInteger('goal_id');
            $table->unsignedBigInteger('user_id');
            $table->integer('score')->default(0);
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('answer_goals');
    }
}
