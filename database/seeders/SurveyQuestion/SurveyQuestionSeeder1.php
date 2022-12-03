<?php

namespace Database\Seeders\SurveyQuestion;

use App\Models\Question;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SurveyQuestionSeeder1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $survey_question_1 = [
        "1" => [
          'name' => 'Date of Birth',
          'type' => Question::FILL_BLANK,
          'score' => 0,
        ],
        "2" => [
          'name' => 'Marital Status',
          'type' => Question::SINGLE_CHOICE,
          'score' => 0,
          'data_raw' => [
            "options" => [
              [
                "value" => "single",
                "content" => "Single",
                "score" => 1,
              ],
              [
                "value" => "partnered",
                "content" => "Partnered",
                "score" => 0,
              ],
              [
                "value" => "divorced",
                "content" => "Divorced",
                "score" => 3,
              ],
              [
                "value" => "widowed",
                "content" => "Widowed",
                "score" => 3,
              ]
            ],
          ]
        ],
        "3" => [
          'name' => 'Caretaker',
          'type' => Question::SINGLE_CHOICE,
          'score' => 0,
          'description' => 'Y/N',
          'data_raw' => [
            "options" => [
              [
                "value" => "parent",
                "content" => "Parent",
                "score" => 1,
              ],
              [
                "value" => "children",
                "content" => "Children",
                "score" => 1,
              ],
              [
                "value" => "other",
                "content" => "Other",
                "score" => 1,
              ]
            ],
          ]
        ],
        "4" => [
          'name' => 'Gender at birth',
          'type' => Question::SINGLE_CHOICE,
          'score' => 0,
          'data_raw' => [
            "options" => [
              [
                "value" => "female",
                "content" => "Female",
                "score" => 1,
              ],
              [
                "value" => "male",
                "content" => "Male",
                "score" => 2,
              ]
            ],
          ]
        ],
        "5" => [
          'name' => 'Ethnicity',
          'type' => Question::SINGLE_CHOICE,
          'score' => 0,
          'data_raw' => [
            "options" => [
              [
                "value" => "white",
                "content" => "White",
                "score" => 1,
              ],
              [
                "value" => "black",
                "content" => "Black",
                "score" => 3,
              ],
              [
                "value" => "hispanic",
                "content" => "Hispanic",
                "score" => 2,
              ],
              [
                "value" => "native_american",
                "content" => "Native American",
                "score" => 3,
              ],
              [
                "value" => "asian",
                "content" => "Asian",
                "score" => 1,
              ],
              [
                "value" => "south_asian",
                "content" => "South Asian",
                "score" => 3,
              ],
              [
                "value" => "pac_islander",
                "content" => "Pacific Islander",
                "score" => 2,
              ]
            ],
          ]
        ]
      ];

      foreach($survey_question_1 as $question) {
        $question['survey_id'] = 1;
        $question = Question::create($question);
      }
    }
}
