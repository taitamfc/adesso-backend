<?php

namespace Database\Seeders\GoalQuestion;

use App\Models\Question;
use Illuminate\Database\Seeder;
class GoalQuestionSeeder9 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $goal_question = [
        "1" => [
          'name' => 'What symptoms have you experienced or observed in a loved one?',
          'type' => Question::FILL_BLANK,
          'score' => 0,
        ],
        "2" => [
          'name' => 'What steps can you take to advocate for the needs of your heart or that of your loved one?',
          'type' => Question::FILL_BLANK,
          'score' => 0,
        ],
        "3" => [
          'name' => 'On a scale of 1-5, rate how comfortable you are getting the healthcare you need and advocating for yourself or your loved one.',
          'type' => Question::FILL_BLANK,
          'score' => 0,
        ],
        "4" => [
          'name' => 'Go Deepers:',
          'type' => Question::SINGLE_CHOICE,
          'score' => 0,
          'data_raw' => [
            "options" => [
              [
                "content" => "Use this checklist for your physical",
                "value" => "use_this_checklist_for_your_physical",
                "score" => 0
              ],
              [
                "content" => "Know the symptoms of a heart attack for women vs men.",
                "value" => "know_the_symptoms_of_a_heart_attack_for_women_vs_men",
                "score" => 0
              ],
              [
                "content" => "Create an emergency plan.",
                "value" => "create_an_emergency_plan",
                "score" => 0
              ],
              [
                "content" => "Advocate for yourself when you go to the emergency room.",
                "value" => "advocate_for_yourself_when_you_go_to_the_emergency_room",
                "score" => 0,
              ]
            ]
          ]
        ]
      ];

      foreach($goal_question as $question) {
        $question['goal_id'] = 9;
        $question = Question::create($question);
      }
    }
}
