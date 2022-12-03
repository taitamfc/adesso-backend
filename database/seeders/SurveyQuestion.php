<?php

namespace Database\Seeders;

use Database\Seeders\SurveyQuestion\SurveyQuestionSeeder1;
use Database\Seeders\SurveyQuestion\SurveyQuestionSeeder2;
use Database\Seeders\SurveyQuestion\SurveyQuestionSeeder3;
use Database\Seeders\SurveyQuestion\SurveyQuestionSeeder4;
use Database\Seeders\SurveyQuestion\SurveyQuestionSeeder5;
use Database\Seeders\SurveyQuestion\SurveyQuestionSeeder6;
use Database\Seeders\SurveyQuestion\SurveyQuestionSeeder7;
use Database\Seeders\SurveyQuestion\SurveyQuestionSeeder8;
use Database\Seeders\SurveyQuestion\SurveyQuestionSeeder9;
use Illuminate\Database\Seeder;

class SurveyQuestion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->call([
        SurveyQuestionSeeder1::class,
        SurveyQuestionSeeder2::class,
        SurveyQuestionSeeder3::class,
        SurveyQuestionSeeder4::class,
        SurveyQuestionSeeder5::class,
        SurveyQuestionSeeder6::class,
        SurveyQuestionSeeder7::class,
        SurveyQuestionSeeder8::class,
        SurveyQuestionSeeder9::class,
      ]);
    }
}
