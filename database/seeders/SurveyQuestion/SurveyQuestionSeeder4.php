<?php

namespace Database\Seeders\SurveyQuestion;

use DB;
use App\Models\Question;
use Illuminate\Database\Seeder;

class SurveyQuestionSeeder4 extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $survey_question = [
      "1" => [
        'name' => 'You were worried you would not have enough food to eat?',
        'type' => Question::TRUE_FALSE,
        'score' => 0,
        'data_raw' => [
          "section" => [
            "title" => "Food Insecurity",
            "description" => "During the last 12 months, was there a time when, because of lack of money or other resources",
          ],
          "options" => [
            [
              "content" => "Yes",
              "value" => "yes",
              "score" => 1,
            ],
            [
              "content" => "No",
              "value" => "no",
              "score" => 0,
            ]
          ],
        ]
      ],
      "2" => [
        'name' => 'You or other family members had to skip a meal?',
        'type' => Question::TRUE_FALSE,
        'score' => 0,
        'data_raw' => [
          "options" => [
            [
              "content" => "Yes",
              "value" => "yes",
              "score" => 1,
            ],
            [
              "content" => "No",
              "value" => "no",
              "score" => 0,
            ]
          ],
        ]
      ],
      "3" => [
        'name' => 'Your household ran out of food?',
        'type' => Question::TRUE_FALSE,
        'score' => 0,
        'data_raw' => [
          "options" => [
            [
              "content" => "Yes",
              "value" => "yes",
              "score" => 1,
            ],
            [
              "content" => "No",
              "value" => "no",
              "score" => 0,
            ]
          ],
        ]
      ],
      "4" => [
        'name' => 'You could not afford to eat a balanced diet?',
        'type' => Question::TRUE_FALSE,
        'score' => 0,
        'data_raw' => [
          "options" => [
            [
              "content" => "Yes",
              "value" => "yes",
              "score" => 1,
            ],
            [
              "content" => "No",
              "value" => "no",
              "score" => 0,
            ]
          ],
        ]
      ],
      "5" => [
        'name' => 'I could handle a major unexpected expense.',
        'type' => Question::TRUE_FALSE,
        'score' => 0,
        'data_raw' => [
          "section" => [
            "title" => "Financial Insecurity",
            "description" => "",
          ],
          "options" => [
            [
              "content" => "Yes",
              "value" => "yes",
              "score" => 0,
            ],
            [
              "content" => "No",
              "value" => "no",
              "score" => 1,
            ]
          ],
        ]
      ],
      "6" => [
        'name' => 'I have money left at the end of the month.',
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
              "score" => 1,
            ]
          ],
        ]
      ],
      "7" => [
        'name' => 'I am behind with my finances.',
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
              "score" => 1,
            ]
          ],
        ]
      ],
      "8" => [
        'name' => 'I can enjoy life because of the way I am managing my money.',
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
              "score" => 1,
            ]
          ],
        ]
      ],
    ];

    foreach($survey_question as $question) {
      $question['survey_id'] = 4;
      $question = Question::create($question);
    }
  }
}
