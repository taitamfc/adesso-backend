<?php

namespace Database\Seeders\GoalQuestion;

use App\Models\Question;
use Illuminate\Database\Seeder;
class GoalQuestionSeeder2 extends Seeder
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
          'name' => '',
          'type' => Question::SINGLE_CHOICE,
          'score' => 0,
          'data_raw' => [
            "options" => [
              [
                "content" => "Journal and Track Your Movements This Week",
                "value" => "journal_and_track_your_movements_this_week",
                "score" => 0
              ]
            ],
          ]
        ],
        "2" => [
          'name' => 'Daily Moves',
          'type' => Question::QUESTION_TABLE,
          'score' => 0,
          'data_raw' => [
            "section" => [
              "title" => "Log Your Movements",
            ],
            "value" => [
              ["isEdit" => true, "what_you_did" => "", "how_long" => ""],
              ["isEdit" => true, "what_you_did" => "", "how_long" => ""],
            ], 
            "fields" => [
              ["key" => "what_you_did", "type" => "text", "label" => "What you did"], 
              ["key" => "how_long", "type" => "text", "label" => "How long"]
            ]
          ]
        ],
        "3" => [
          'name' => 'Target Moves (THR for 30 minutes)',
          'type' => Question::QUESTION_TABLE,
          'score' => 0,
          'data_raw' => [
            "value" => [
              ["isEdit" => true, "what_you_did" => "", "how_long" => ""],
              ["isEdit" => true, "what_you_did" => "", "how_long" => ""],
            ], 
            "fields" => [
              ["key" => "what_you_did", "type" => "text", "label" => "What you did"], 
              ["key" => "how_long", "type" => "text", "label" => "How long"]
            ]
          ]
        ],
        "4" => [
          'name' => 'Rate your move habits On a scale of 1-5, how would you rate your movement habits for the day?',
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
                "content" => "Calculate your target heart rate",
                "value" => "calculate_your_target_heart_rate",
                "score" => 0
              ],
              [
                "content" => "Create a target movement plan",
                "value" => "create_a_target_movement_plan",
                "score" => 0
              ],
              [
                "content" => "Create a daily movement plan",
                "value" => "create_a_daily_movement_plan",
                "score" => 0
              ],
              [
                "content" => "Exercise physiology",
                "value" => "exercise_physiology",
                "score" => 0
              ],
              [
                "content" => "Develop a roadmap to increase intensity",
                "value" => "develop_a_roadmap_to_increase_intensity",
                "score" => 0
              ]
            ],
          ]
        ]
      ];

      foreach($goal_question as $question) {
        $question['goal_id'] = 2;
        $question = Question::create($question);
      }
    }
}
