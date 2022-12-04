<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JourneySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dummyLessons = [
              [
                'imgSrc' => '/images/my-adresso-journey/lesson-01.png',
                'title' => 'Living From Your Heart',
                'time' => 8,
                'point' => 20,
                'end_description' => 'You completed this session and earned 10 heart beats.
                To advance to your next Heart Level, keep logging your actions, reviewing Go Deeper activities and advancing through your heart journey to gain more heart beats.'
              ],
              [
                'imgSrc' => '/images/my-adresso-journey/lesson-02.png',
                'title' => 'Living From Your Heart',
                'time' => 8,
                'point' => 20,
              ],
              [
                'imgSrc' => '/images/my-adresso-journey/lesson-01.png',
                'title' => 'Living From Your Heart',
                'time' => 8,
                'point' => 20,
              ],
              [
                'imgSrc' => '/images/my-adresso-journey/lesson-02.png',
                'title' => 'Living From Your Heart',
                'time' => 8,
                'point' => 20,
              ],
              [
                'imgSrc' => '/images/my-adresso-journey/lesson-01.png',
                'title' => 'Relate => People, Passion, and Purpose',
                'time' => 8,
                'point' => 10,
                'bonus' => 25,
                'bonus_description' => '+25 Half',
              ],
              [
                'imgSrc' => '/images/my-adresso-journey/lesson-02.png',
                'title' => 'Know Your Heart',
                'time' => 8,
                'point' => 10,
              ],
              [
                'imgSrc' => '/images/my-adresso-journey/lesson-01.png',
                'title' => 'Advocate => Your Medical Care, Your Heart, Your Life',
                'time' => 8,
                'point' => 10,
              ],
              [
                'imgSrc' => '/images/my-adresso-journey/lesson-02.png',
                'title' => 'Know Your Numbers',
                'time' => 8,
                'point' => 10,
              ],
              [
                'imgSrc' => '/images/my-adresso-journey/lesson-01.png',
                'title' => 'Balance => Hormones and Your Heart',
                'time' => 8,
                'point' => 10,
              ],
              [
                'imgSrc' => '/images/my-adresso-journey/lesson-02.png',
                'title' => 'Next Steps, success, pass it on',
                'time' => 8,
                'point' => 10,
                'bonus' => 50,
                'bonus_description' => '+50 Completed',
              ]
        ];

        foreach( $dummyLessons as $index => $dummyLesson ){
          DB::table('journeys')->insert([
            'imgSrc'  => $dummyLesson['imgSrc'],
            'title'   => $dummyLesson['title'],
            'time'    => $dummyLesson['time'],
            'point'   => $dummyLesson['point'],
            'bonus'   => isset($dummyLesson['bonus']) ? $dummyLesson['bonus'] : 0,
            'bonus_description'   => $dummyLesson['bonus_description'] ?? '',
            'end_description'     => $dummyLesson['end_description'] ?? '',
            'position' => $index + 1
          ]);
        }
    }
}
