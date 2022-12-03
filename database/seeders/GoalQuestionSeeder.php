<?php

namespace Database\Seeders;

use Database\Seeders\GoalQuestion\GoalQuestionSeeder1;
use Database\Seeders\GoalQuestion\GoalQuestionSeeder2;
use Database\Seeders\GoalQuestion\GoalQuestionSeeder3;
use Database\Seeders\GoalQuestion\GoalQuestionSeeder4;
use Database\Seeders\GoalQuestion\GoalQuestionSeeder5;
use Database\Seeders\GoalQuestion\GoalQuestionSeeder6;
use Database\Seeders\GoalQuestion\GoalQuestionSeeder7;
use Database\Seeders\GoalQuestion\GoalQuestionSeeder8;
use Database\Seeders\GoalQuestion\GoalQuestionSeeder9;

use Illuminate\Database\Seeder;

class GoalQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->call([
        GoalQuestionSeeder1::class,
        GoalQuestionSeeder2::class,
        GoalQuestionSeeder3::class,
        GoalQuestionSeeder4::class,
        GoalQuestionSeeder5::class,
        GoalQuestionSeeder6::class,
        GoalQuestionSeeder7::class,
        GoalQuestionSeeder8::class,
        GoalQuestionSeeder9::class,
      ]);
    }
}
