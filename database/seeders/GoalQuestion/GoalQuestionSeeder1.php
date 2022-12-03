<?php

namespace Database\Seeders\GoalQuestion;

use App\Models\Question;
use Illuminate\Database\Seeder;
class GoalQuestionSeeder1 extends Seeder
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
                "content" => "Track your new nourishment habits.",
                "value" => "track_your_new_nourishment_habits",
                "score" => 0,
                "sub_question" => [
                  "content" => "",
                  "type" => Question::SINGLE_CHOICE,
                  "score" => 0,
                  "data_raw" => [
                    "options" => [
                      [
                        "content" => "What heart-healthy foods did you eat today?",
                        "value" => "heart_healthy_foods",
                        "score" => 0,
                      ],
                      [
                        "content" => "What unhealthy foods did you eat today?",
                        "value" => "unhealthy_foods",
                        "score" => 0,
                      ],
                      [
                        "content" => "What do you want to change tomorrow?",
                        "value" => "change_tomorrow",
                        "score" => 0,
                      ]
                    ]
                  ]
                ]
              ]
            ],
          ]
        ],
        "2" => [
          'name' => 'On a scale of 1-5, how would you rate your nourishment habits for the day?',
          'type' => Question::SLIDE,
          'score' => 0,
          'data_raw' => [
            "length" => 5
          ]
        ],
        "3" => [
          'name' => 'Go Deepers:',
          'type' => Question::SINGLE_CHOICE,
          'score' => 0,
          'data_raw' => [
            "options" => [
              [
                "content" => "Maintain a regular Mediterranean diet.",
                "value" => "regular_mediterranean_diet",
                "score" => 0
              ],
              [
                "content" => "Maintain your sugar levels - High Blood Sugar, Metabolic Syndrome and Diabetes  (ApoE 2/3)",
                "value" => "sugar_levels",
                "score" => 0
              ],
              [
                "content" => "Lower your cholesterol - High Cholesterol (ApoE 3/4 and 4/4)",
                "value" => "lower_cholesterol",
                "score" => 0
              ],
              [
                "content" => "Lower your salt intake - High blood pressure",
                "value" => "lower_salt_intake",
                "score" => 0
              ],
              [
                "content" => "Track your diet for the week",
                "value" => "track_diet_for_week",
                "score" => 0
              ],
              [
                "content" => "Create a heart healthy shopping list",
                "value" => "create_heart_healthy_shopping_list",
                "score" => 0
              ],
              [
                "content" => "Create a menu for the week",
                "value" => "create_menu_for_week",
                "score" => 0
              ],
              [
                "content" => "Determine what to substitute for processed, sugary, fried foods, red meat from your diet.",
                "value" => "substitute_processed_sugary_fried_foods_red_meat",
                "score" => 0
              ],
              [
                "content" => "Learn How to Read Nutrition Labels",
                "value" => "learn_how_to_read_nutrition_labels",
                "score" => 0
              ],
              [
                "content" => "Test out Dietary Plans",
                "value" => "test_out_dietary_plans",
                "score" => 0
              ],
              [
                "content" => "Cook recipes recommended by the Adesso.health experts.",
                "value" => "cook_recipes_recommended_by_adesso_health_experts",
                "score" => 0
              ],
              [
                "content" => "Try intermittent fasting",
                "value" => "try_intermittent_fasting",
                "score" => 0
              ],
              [
                "content" => "Snacking or how to eat out.",
                "value" => "snacking_or_how_to_eat_out",
                "score" => 0
              ],
            ],
          ]
        ]
      ];

      foreach($goal_question as $question) {
        $question['goal_id'] = 1;
        $question = Question::create($question);
      }
    }
}
