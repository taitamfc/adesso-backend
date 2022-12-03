<?php

namespace Database\Seeders;

use App\Models\Survey;
use Illuminate\Database\Seeder;

class SurveySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Survey::create([
        'order' => 1,
        'title' => 'Tell Us about Yourself',
        'text_intro' => '<p>Who are you? These factors help us understand a bit about your life. It is also important for us to understand your genetics and ethnicity.</p>
        <p>Your ethnic background matters. Black women have the highest prevalence of heart disease, with 50% of Black women having some form of heart diseases by age 20. 
        South Asian women, including women from Indian and Filipino descent, also have an increased risk of heart disease. We need to know to understand who you are a bit better! </p>',
        'background' => '/images/survey/1.png'
      ]);
      Survey::create([
        'order' => 2,
        'title' => 'Lifestyle Choices and How You Live Your Days',
        'text_intro' => '<p>Heart health is based on many risk factors. 80% of the time heart disease is preventable based on your lifestyle choices. How you eat, how you move, how you sleep and how you manage stress are some of the critical factors of a healthy lifestyle.</p>
        <p>These are the ones we can control. Let’s see where you are today, before we start on this wellness journey together.</p>',
        'background' => '/images/survey/2.png'
      ]);
      Survey::create([
        'order' => 3,
        'title' => 'Your Feelings and Mental Health',
        'text_intro' => '<p>Stress is just a part of our lives, but how we respond to it matters. Chronic stress or intense stress over time can really affect our hearts and our health. Depression is twice as common in women, and those with depression are at an increased risk for heart disease, 2-3x greater than women who are not depressed. The most important thing is knowing how you feel and understanding how to manage it.</p>',
        'background' => '/images/survey/3.png'
      ]);
      Survey::create([
        'order' => 4,
        'title' => 'Food Insecurity',
        'text_intro' => '<p>Need Copy</p>',
        'background' => '/images/survey/4.png'
      ]);
      Survey::create([
        'order' => 5,
        'title' => 'Job Satisfaction',
        'text_intro' => '<p>Need copy</p>',
        'background' => '/images/survey/5.png'
      ]);
      Survey::create([
        'order' => 6,
        'title' => 'Past Medical History',
        'text_intro' => '<p>If you have had any issues with your heart in the past, or any evidence of heart disease by screening tests, then you are at greater risk of having a problem again. Most importantly, we need to know how you FEEL!  When you are trying to do “you,” it’s important to pay attention to how you are feeling while getting through your days. How you feel means more than you think! </p>',
        'background' => '/images/survey/6.png'
      ]);
      Survey::create([
        'order' => 7,
        'title' => 'Heart History',
        'text_intro' => '<p>Need copy</p>',
        'background' => '/images/survey/7.png'
      ]);
      Survey::create([
        'order' => 8,
        'title' => 'The Women Stuff',
        'text_intro' => '<p>Did you know that if you had complications with pregnancy that you are at greater risk of heart disease? These “adverse outcomes of pregnancy” can increase your risk of heart disease later in life.</p>
        <p>And of course, we need to talk about menopause. Going into menopause at an earlier age, and even having significant symptoms impacts your overall heart health. Tell us where you are at in your hormonal journey.</p>',
        'background' => '/images/survey/8.png'
      ]);
      Survey::create([
        'order' => 9,
        'title' => 'Your Family History',
        'text_intro' => '<p>Remember, 80% of the time heart disease is preventable, but we have to start early, especially when you have a family history of heart disease. Let’s figure out how your family’s heart history may affect your own.</p>',
        'background' => '/images/survey/9.png'
      ]);
    }
}
