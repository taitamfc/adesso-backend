<?php

namespace Database\Seeders\SurveyQuestion;

use App\Models\Question;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SurveyQuestionSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // TODO: Add dependency
      $question_ids = [];
      $survey_question_2 = [
        "1" => [
          'name' => 'Do you smoke?',
          'type' => Question::TRUE_FALSE,
          'score' => 0,
          'data_raw' => [
            "options" => [
              [
                "value" => "yes",
                "content" => "Yes",
                "score" => 0,
              ],
              [
                "value" => "no",
                "content" => "No",
                "score" => 0,
              ]
            ],
          ]
        ],
        "2" => [
          'name' => ' ',
          'type' => Question::SINGLE_CHOICE,
          'score' => 0,
          'data_raw' => [
            "main_content" => "How many packs/day?__________ x How many years? ________________(can todd calculate pk/yr?)",
            "options" => [
              [
                "value" => "less_than_20",
                "content" => "<20pk/yr",
                "score" => 1,
              ],
              [
                "value" => "more_than_20",
                "content" => ">20pk/yr",
                "score" => 2,
              ],
              [
                "value" => "more_than_50",
                "content" => ">50pk/yr",
                "score" => 3,
              ]
            ],
            "dependency" => [
              "question_id" => $question_ids[1] ?? 0,
              "answer" => true,
            ]
          ]
        ],
        "3" => [
          'name' => 'Have you smoked in the last 12 months?',
          'type' => Question::TRUE_FALSE,
          'score' => 0,
          'data_raw' => [
            "options" => [
              [
                "value" => "yes",
                "content" => "Yes",
                "score" => 1,
              ],
              [
                "value" => "no",
                "content" => "No",
                "score" => 0,
              ]
            ],
          ],
          "dependency" => [
            "question_id" => $question_ids[1] ?? 0,
            "answer" => true,
          ]
        ],
        "4" => [
          'name' => 'Are you taking oral contraceptives?',
          'type' => Question::TRUE_FALSE,
          'score' => 0,
          'data_raw' => [
            "options" => [
              [
                "content" => "Yes",
                "value" => "yes",
                "score" => 3,
              ],
              [
                "content" => "No",
                "value" => "no",
                "score" => 2,
              ]
            ],
          ],
          "dependency" => [
            "question_id" => $question_ids[1] ?? 0,
            "answer" => true,
          ]
        ],
        "5" => [
          'name' => 'Vaping?',
          'type' => Question::TRUE_FALSE,
          'score' => 0,
          'data_raw' => [
            "options" => [
              [
                "content" => "Yes",
                "value" => "yes",
                "score" => 3,
              ],
              [
                "content" => "No",
                "value" => "no",
                "score" => 0,
              ]
            ],
          ]
        ],
        "6" => [
          'name' => 'Drinking',
          'type' => Question::SINGLE_CHOICE,
          'score' => 0,
          'data_raw' => [
            "main_content" => "Beer = 12oz;   Wine = 5 oz;   Spirits = 1.5oz.",
            "options" => [
              [
                "content" => "Less than 7 drinks a week.",
                "value" => "less_than_7_a_week",
                "score" => 0,
              ],
              [
                "content" => "7- 14 drinks a week",
                "value" => "7_to_14_a_week",
                "score" => 2,
              ],
              [
                "content" => ">14drinks/week",
                "value" => "more_than_14_a_week",
                "score" => 3,
              ],
              [
                "content" => "greater than 5 drinks in one sitting",
                "value" => "more_than_5_in_one_sitting",
                "score" => 3,
              ]
            ],
          ]
        ],
        "7" => [
          'name' => 'Overweight/Obesity',
          'type' => Question::SINGLE_CHOICE,
          'score' => 0,
          'data_raw' => [
            "main_content" => "Height ______.   Weight _________.	BMI __________",
            "options" => [
              [
                "content" => "<25 (normal)",
                "value" => "less_than_25",
                "score" => 0,
              ],
              [
                "content" => "25-29.9. (overweight)",
                "value" => "25_to_29.9",
                "score" => 1,
              ],
              [
                "content" => ">=30 (obese)",
                "value" => "more_than_or_equal_to_30",
                "score" => 2,
              ]
            ],
          ]
        ],
        "8" => [
          'name' => 'Pant waist size=',
          'type' => Question::SINGLE_CHOICE,
          'score' => 0,
          'data_raw' => [
            "main_content" => "Height ______.   Weight _________.	BMI __________",
            "options" => [
              [
                "content" => "<35 inches",
                "value" => "less_than_35",
                "score" => 0,
              ],
              [
                "content" => ">= 35 inches",
                "value" => "more_than_or_equal_to_35",
                "score" => 1,
              ]
            ],
          ]
        ],
        "9" => [
          'name' => ' ',
          'type' => Question::QUESTION_TABLE,
          'score' => 0,
          'data_raw' => [
            "value" => [
              ["check" => [
                "value" => null,
                "score" => 3
              ], "isEdit" => true, "examples" => "Sitting, reclining or lying; watching TV", "intensity" => "Sedentary behavior"], 
              ["check" => [
                "value" => null,
                "score" => 3
              ], "isEdit" => true, "examples" => "Walking slowly, cooking, light housework", "intensity" => "Light"], 
              ["check" => [
                "value" => null,
                "score" => 2
              ], "isEdit" => true, "examples" => "Brisk walking (2.4-4mph), biking (5-9mph), ballroom dancing, active yoga, recreational swimming", "intensity" => "Moderate"], 
              ["check" => [
                "value" => null,
                "score" => 0
              ], "isEdit" => true, "examples" => "Jogging/running, biking (>10mph), singles tennis,", "intensity" => "Vigorous"]
            ], 
            "fields" => [
              ["key" => "check", "type" => "checkbox", "label" => null, "isEdit" => true, "options" => ["checked" => true]], 
              ["key" => "intensity", "type" => "text", "label" => "INTENSITY"], 
              ["key" => "examples", "type" => "text", "label" => "Examples"]
            ]
          ]
        ],
        "10" => [
          'name' => 'If you exercise regularly is it:',
          'type' => Question::SINGLE_CHOICE,
          'score' => 0,
          'data_raw' => [
            "options" => [
              [
                "content" => "At least 75mins/week vigorous physical activity or 150mins/week of moderately intense physical activity each week",
                "value" => "at_least_75mins_vigorous_or_150mins_moderate",
                "score" => 0,
              ],
              [
                "content" => "Less than 75mins/week vigorous physical activity or 150mins/week of moderately intense physical activity each week",
                "value" => "less_than_75mins_vigorous_or_150mins_moderate",
                "score" => 1,
              ],
              [
                "content" => "High intensity workouts >5hours/week",
                "value" => "high_intensity_workouts",
                "score" => 0,
              ]
            ],
          ]
        ],
        "11" => [
          'name' => 'Servings of fruits and vegetables/day',
          'type' => Question::SINGLE_CHOICE,
          'score' => 0,
          'data_raw' => [
            "options" => [
              [
                "content" => "5 or more servings",
                "value" => "5_or_more",
                "score" => 0,
              ],
              [
                "content" => "2-4 servings",
                "value" => "2_to_4",
                "score" => 1,
              ],
              [
                "content" => "0-1 servings",
                "value" => "0_to_1",
                "score" => 0,
              ]
            ],
          ]
        ],
        "12" => [
          'name' => 'Servings of saturated (animal) fats/day (not including low fat dairy, white and skinless turkey and skinless chicken or fish)/day',
          'type' => Question::SINGLE_CHOICE,
          'score' => 0,
          'data_raw' => [
            "options" => [
              [
                "content" => "5 or more servings",
                "value" => "5_or_more",
                "score" => 2,
              ],
              [
                "content" => "2-4 servings",
                "value" => "2_to_4",
                "score" => 1,
              ],
              [
                "content" => "0-1 servings",
                "value" => "0_to_1",
                "score" => 0,
              ]
            ],
          ]
        ],
        "13" => [
          'name' => 'Whole grains/day: (recommended = 3oz/day and 1oz = 1 serving)',
          'type' => Question::SINGLE_CHOICE,
          'score' => 0,
          'data_raw' => [
            "options" => [
              [
                "content" => "3 or more servings",
                "value" => "3_or_more",
                "score" => 0,
              ],
              [
                "content" => "1-2 servings",
                "value" => "1_to_2",
                "score" => 1,
              ],
              [
                "content" => "0-servings",
                "value" => "0",
                "score" => 2,
              ]
            ],
          ]
        ],
        "14" => [
          'name' => 'Fast Food/week',
          'type' => Question::SINGLE_CHOICE,
          'score' => 0,
          'data_raw' => [
            "options" => [
              [
                "content" => "5 or more servings",
                "value" => "5_or_more",
                "score" => 2,
              ],
              [
                "content" => "2-4 servings",
                "value" => "2_to_4",
                "score" => 1,
              ],
              [
                "content" => "0-1 servings",
                "value" => "0_to_1",
                "score" => 0,
              ]
            ],
          ]
        ],
        "15" => [
          'name' => 'High salt/processed foods/day',
          'type' => Question::SINGLE_CHOICE,
          'score' => 0,
          'data_raw' => [
            "options" => [
              [
                "content" => "5 or more servings",
                "value" => "5_or_more",
                "score" => 2,
              ],
              [
                "content" => "2-4 servings",
                "value" => "2_to_4",
                "score" => 1,
              ],
              [
                "content" => "0-1 servings",
                "value" => "0_to_1",
                "score" => 0,
              ]
            ],
          ]
        ],
        "16" => [
          'name' => 'High sugar food/day',
          'type' => Question::SINGLE_CHOICE,
          'score' => 0,
          'data_raw' => [
            "options" => [
              [
                "content" => "5 or more servings",
                "value" => "5_or_more",
                "score" => 2,
              ],
              [
                "content" => "2-4 servings",
                "value" => "2_to_4",
                "score" => 1,
              ],
              [
                "content" => "0-1 servings",
                "value" => "0_to_1",
                "score" => 0,
              ]
            ],
          ]
        ],
        "17" => [
          'name' => 'Do you drink Soda?',
          'type' => Question::TRUE_FALSE,
          'score' => 0,
          'data_raw' => [
            "options" => [
              [
                "content" => "Yes",
                "value" => "yes",
                "score" => 2,
              ],
              [
                "content" => "No",
                "value" => "no",
                "score" => 0,
              ]
            ],
          ]
        ],
        "18" => [
          'name' => 'Do you use Olive Oil instead of butter or high calorie dressing?',
          'type' => Question::TRUE_FALSE,
          'score' => 0,
          'data_raw' => [
            "options" => [
              [
                "content" => "Yes",
                "value" => "yes",
                "score" => 0,
              ],
              [
                "content" => "No",
                "value" => "no",
                "score" => 2,
              ]
            ],
          ]
        ],
        "19" => [
          'name' => 'Do you eat nuts instead of other high calorie salty snacks?',
          'type' => Question::TRUE_FALSE,
          'score' => 0,
          'data_raw' => [
            "options" => [
              [
                "content" => "Yes",
                "value" => "yes",
                "score" => 0,
              ],
              [
                "content" => "No",
                "value" => "no",
                "score" => 2,
              ]
            ],
          ]
        ],
        "20" => [
          'name' => 'On average how many hours of sleep do you get each night:',
          'type' => Question::SINGLE_CHOICE,
          'score' => 0,
          'data_raw' => [
            "options" => [
              [
                "content" => "<7 hours/night.",
                "value" => "less_than_7",
                "score" => 1,
              ],
              [
                "content" => "7-9 hours/night.",
                "value" => "7_to_9",
                "score" => 0,
              ],
              [
                "content" => ">9 hours/night.",
                "value" => "more_than_9",
                "score" => 1,
              ]
            ],
          ]
        ],
      ];

      foreach($survey_question_2 as $question) {
        $question['survey_id'] = 2;
        $question = Question::create($question);
        $question_ids[] = $question->id;
      }
    }
}
