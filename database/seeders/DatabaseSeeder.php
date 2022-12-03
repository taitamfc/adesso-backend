<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ActionSeeder::class,
            AdminSeeder::class,
            InitDataSeed::class,
            SurveySeeder::class,
            SurveyQuestion::class,
            GoalSeeder::class,
            GoalQuestionSeeder::class,
        ]);
    }
}
