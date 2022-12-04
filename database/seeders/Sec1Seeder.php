<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\JournalSeeder;
use Database\Seeders\JourneySeeder;
use Database\Seeders\JourneyArticleSeeder;
class Sec1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            JournalSeeder::class,
            JourneySeeder::class,
            JourneyArticleSeeder::class
          ]);
    }
}
