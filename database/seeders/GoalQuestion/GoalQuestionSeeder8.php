<?php

namespace Database\Seeders\GoalQuestion;

use App\Models\Question;
use Illuminate\Database\Seeder;
class GoalQuestionSeeder8 extends Seeder
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
          'name' => 'What symptoms did you experience today related to your hormonal/menstral cycle?',
          'type' => Question::FILL_BLANK,
          'score' => 0
        ],
        "2" => [
          'name' => 'What steps did you take to help alleviate your hormonal symptoms?',
          'type' => Question::FILL_BLANK,
          'score' => 0
        ],
        "3" => [
          'name' => 'What would you like to do tomorrow to alleviate these symptoms?',
          'type' => Question::SINGLE_CHOICE,
          'score' => 0,
          'data_raw' => [
            "options" => [
              [
                "content" => "Rate Your Hormone Habits.",
                "value" => "rate_your_hormone_habits",
                "score" => 0,
              ]
            ]
          ]
        ],
        "4" => [
          'name' => 'On a scale of 1-5, how do you feel about how you managed your hormones today?',
          'type' => Question::SLIDE,
          'score' => 0,
          'data_raw' => [
            "length" => 5
          ]
        ],
        "5" => [
          'name' => 'Go Deepers:',
          'type' => Question::SINGLE_CHOICE,
          'score' => 0,
          'data_raw' => [
            "options" => [
              [
                "content" => "Supplements",
                "value" => "supplements",
                "score" => 0
              ],
              [
                "content" => "Alternative Medicine" ,
                "value" => "alternative_medicine",
                "score" => 0
              ],
              [
                "content" => "Options for treating symptoms of menopause HRT",
                "value" => "create_a_daily_movement_plan",
                "score" => 0
              ],
            ]
          ]
        ]
      ];

      foreach($goal_question as $question) {
        $question['goal_id'] = 8;
        $question = Question::create($question);
      }
    }
}
