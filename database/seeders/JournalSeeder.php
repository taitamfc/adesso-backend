<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JournalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contents = [
            [
                'title' => 'Basic Factors',
                'description' => 'Your cholesterol, blood pressure and blood sugar all have tremendous impacts on your heart.
                Cholesterol:
                Bad Cholesterol (LDL) is a number we want to keep LOW. It creates tears in the lining of your heart that increase plaque and the chance of heart disease. Good Cholesterol (HDL) keeps your heart protected and safe. Triglycerides are fat found in your blood. They’re important to keep an eye on too, because they harden the arteries of the heart, increasing  the chances of a stroke, heart attack and other heart diseases.
                Blood Pressure
                65 Million Americans have high blood pressure and they call it the silent killer because 30% of those people don’t even know they have it! We watch the systolic number(high number) because it tells us the pressure against the arteries when the blood is pumping. We watch the diastolic number (lower number) because it tells us how the heart is pumping when the heart is at rest. If the heart is having to work harder to pump blood to your body, that might mean that the lining of the heart is getting stiff. And this leads to heart disease.
                Blood Sugar
                Imagine the inside of a watch. Now imagine pouring honey all over it.  Blood sugar influences how efficiently the heart is able to pump blood to your body. High blood sugar leads to diabetese and many other heart health complications. 
                What to do:
                Get tested for these numbers!
                If you’re numbers are not within a healthy range, discuss your options with your doctor.
                This learning journey and future sessions are designed to help improve all three of these risk factors through steps and changes that you can make.
                ',
            ],
            [
                'title' => 'Exercise'
            ],
            [
                'title' => 'Nourishment'
            ],
            [
                'title' => 'Your sleep'
            ],
            [
                'title' => 'Drinking'
            ],
            [
                'title' => 'Smoking'
            ],
            [
                'title' => 'Stress'
            ],
            [
                'title' => 'Weight'
            ],
            [
                'title' => 'Family History'
            ],
            [
                'title' => 'Past History'
            ]
        ];
        foreach( $contents as $index => $content ){
            DB::table('journals')->insert([
                'title'     => $content['title'] ?? '',
                'description'     => $content['description'] ?? '',
                'position' => $index + 1
            ]);
        }
    }
}
