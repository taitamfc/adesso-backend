<?php

namespace Database\Seeders\SurveyQuestion;

use App\Models\Question;
use Illuminate\Database\Seeder;

class SurveyQuestionSeeder9 extends Seeder
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
        'name' => 'Family History of Heart Disease (check all that apply to a parent, sibling or grandparent):',
        'type' => Question::MULTIPLE_CHOICE,
        'score' => 0,
        'data_raw' => [
          "options" => [
            [
              "content" => "Heart Attack. Y/N",
              "value" => "yes",
              "score" => 0
            ]
          ],
        ]
      ],
      "2" => [
        'name' => 'If yes, at what age were they diagnosed:',
        'type' => Question::SINGLE_CHOICE,
        'score' => 0,
        'data_raw' => [
          "options" => [
            [
              "content" => "Mother",
              "value" => "mother",
              "score" => 0,
              "sub_question" => [
                "name" => "",
                "type" => Question::SINGLE_CHOICE,
                "score" => 0,
                "data_raw" => [
                  "options" => [
                    [
                      "content" => "<65years",
                      "value" => "less_than_65_years",
                      "score" => 3
                    ],
                    [
                      "content" => ">65 yrs",
                      "value" => "greater_than_65_years",
                      "score" => 2
                    ]
                  ]
                ]
              ]
            ],
            [
              "content" => "Father",
              "value" => "father",
              "score" => 0,
              "sub_question" => [
                "name" => "",
                "type" => Question::SINGLE_CHOICE,
                "score" => 0,
                "data_raw" => [
                  "options" => [
                    [
                      "content" => "<55years",
                      "value" => "less_than_55_years",
                      "score" => 3
                    ],
                    [
                      "content" => ">55 yrs",
                      "value" => "greater_than_55_years",
                      "score" => 2
                    ]
                  ]
                ]
              ]
            ],
            [
              "content" => "Sibling",
              "value" => "sibling",
              "score" => 3
            ],
            [
              "content" => "Grandparent",
              "value" => "grandparent",
              "score" => 2
            ],
            [
              "content" => "Stroke. Y/N",
              "value" => "yes",
              "score" => 0
            ],
          ],
        ]
      ],
      "3" => [
        'name' => 'If yes, at what age were they diagnosed:',
        'type' => Question::SINGLE_CHOICE,
        'score' => 0,
        'data_raw' => [
          "options" => [
            [
              "content" => "Mother",
              "value" => "mother",
              "score" => 0,
              "sub_question" => [
                "name" => "",
                "type" => Question::SINGLE_CHOICE,
                "score" => 0,
                "data_raw" => [
                  "options" => [
                    [
                      "content" => "<65years",
                      "value" => "less_than_65_years",
                      "score" => 3
                    ],
                    [
                      "content" => ">65 yrs",
                      "value" => "greater_than_65_years",
                      "score" => 2
                    ]
                  ]
                ]
              ]
            ],
            [
              "content" => "Father",
              "value" => "father",
              "score" => 0,
              "sub_question" => [
                "name" => "",
                "type" => Question::SINGLE_CHOICE,
                "score" => 0,
                "data_raw" => [
                  "options" => [
                    [
                      "content" => "<55years",
                      "value" => "less_than_55_years",
                      "score" => 3
                    ],
                    [
                      "content" => ">55 yrs",
                      "value" => "greater_than_55_years",
                      "score" => 2
                    ]
                  ]
                ]
              ]
            ],
            [
              "content" => "Sibling",
              "value" => "sibling",
              "score" => 3
            ],
            [
              "content" => "Grandparent",
              "value" => "grandparent",
              "score" => 2
            ],
            [
              "content" => "Sudden cardiac death",
              "value" => "sudden_cardiac_death",
              "score" => 3
            ],
            [
              "content" => "Aortic aneurysm",
              "value" => "aortic_aneurysm",
              "score" => 3
            ],
            [
              "content" => "Atrial Fibrillation",
              "value" => "atrial_fibrillation",
              "score" => 2
            ],
            [
              "content" => "Genetic hypercholesterolemia",
              "value" => "genetic_hypercholesterolemia",
              "score" => 3
            ],
          ],
        ]
      ],
    ];

    foreach($survey_question as $question) {
      $question['survey_id'] = 9;
      $question = Question::create($question);
    }
  }
}
