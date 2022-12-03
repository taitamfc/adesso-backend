<?php

namespace Database\Seeders\SurveyQuestion;

use DB;
use App\Models\Question;
use Illuminate\Database\Seeder;

class SurveyQuestionSeeder5 extends Seeder
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
        'name' => 'Do you feel appreciated at work?',
        'type' => Question::TRUE_FALSE,
        'score' => 0,
        'data_raw' => [
          "section" => [
            "title" => "Job Satisfaction",
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
      "2" => [
        'name' => 'Do you work after ordinary working hours to finish your assignments?',
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
        'name' => 'Do you find it hard to sleep because your mind is occupied with work?',
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
        'name' => 'Because of work, do you find it hard to find time to be with family/friends or enjoy activities outside of work?',
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
        'name' => 'Feel you were enjoying life?',
        'type' => Question::TRUE_FALSE,
        'score' => 0,
        'data_raw' => [
          "section" => [
            "title" => "Joy/Purpose",
            "description" => "In the past month did you",
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
        'name' => 'Feel like everything was an effort?',
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
      "7" => [
        'name' => 'Feel that most of what you do is trivial and unimportant?',
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
      "8" => [
        'name' => 'Feel confident that you had discovered a satisfying purpose for your life?',
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
      $question['survey_id'] = 5;
      $question = Question::create($question);
    }
  }
}
