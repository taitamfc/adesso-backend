<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswerQuestionSurveyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_questions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("question_id");
            $table->bigInteger("answer_survey_id")->nullable();
            $table->bigInteger("answer_goal_id")->nullable();
            $table->bigInteger("survey_id")->nullable();
            $table->bigInteger("goal_id")->nullable();
            $table->string('type',50)->nullable();
            $table->string('name', 500)->nullable();
            $table->text('description')->nullable();
            $table->json('data_raw')->nullable();
            $table->json('dependency')->nullable();
            $table->integer('score')->default(0);
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
        Schema::dropIfExists('answer_questions');
    }
}
