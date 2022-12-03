<?php

namespace Database\Seeders\SurveyQuestion;

use App\Models\Question;
use Illuminate\Database\Seeder;

class SurveyQuestionSeeder3 extends Seeder
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
          'name' => 'Do you have previous mental health history?',
          'type' => Question::MULTIPLE_CHOICE,
          'score' => 0,
          'data_raw' => [
            "options" => [
              [
                "content" => "History of Depression.",
                "value" => "history_of_depression",
                "score" => 3,
              ],
              [
                "content" => "History of Anxiety.",
                "value" => "history_of_anxiety",
                "score" => 3,
              ],
            ]
          ]
        ],
        // TODO: Update content question 2
        "2" => [
          'name' => 'Over the past 2 weeks, how often have you been bothered by any of the following problems:',
          'type' => Question::QUESTION_TABLE,
          'score' => 0,
          'data_raw' => [
            "value" => [
              ["isEdit" => true, "text" => "Feeling nervous, anxious or on edge.", 
                "not_at_all" => [
                  "value" => null,
                  "score" => 0
                ],
                "several_days" => [
                  "value" => null,
                  "score" => 1
                ],
                "more_days_than_not" => [
                  "value" => null,
                  "score" => 2
                ],
                "nearly_every_day" => [
                  "value" => null,
                  "score" => 3
                ]
              ],
              ["isEdit" => true, "text" => "Not been able to stop or control worrying", 
                "not_at_all" => [
                  "value" => null,
                  "score" => 0
                ],
                "several_days" => [
                  "value" => null,
                  "score" => 1
                ],
                "more_days_than_not" => [
                  "value" => null,
                  "score" => 2
                ],
                "nearly_every_day" => [
                  "value" => null,
                  "score" => 3
                ]
              ],
              ["isEdit" => true, "text" => "Feeling down, depressed or hopeless.", 
                "not_at_all" => [
                  "value" => null,
                  "score" => 0
                ],
                "several_days" => [
                  "value" => null,
                  "score" => 1
                ],
                "more_days_than_not" => [
                  "value" => null,
                  "score" => 2
                ],
                "nearly_every_day" => [
                  "value" => null,
                  "score" => 3
                ]
              ],
              ["isEdit" => true, "text" => "Little interest or pleasure in doing things.", 
                "not_at_all" => [
                  "value" => null,
                  "score" => 0
                ],
                "several_days" => [
                  "value" => null,
                  "score" => 1
                ],
                "more_days_than_not" => [
                  "value" => null,
                  "score" => 2
                ],
                "nearly_every_day" => [
                  "value" => null,
                  "score" => 3
                ]
              ],
            ],
            "fields" => [
              ["key" => "text", "type" => "text", "label" => null],
              ["key" => "not_at_all", "type" => "checkbox", "label" => "Not at all", "isEdit" => true, "options" => ["checked" => true]],
              ["key" => "several_days", "type" => "checkbox", "label" => "Several days", "isEdit" => true, "options" => ["checked" => true]],
              ["key" => "more_days_than_not", "type" => "checkbox", "label" => "More days than not", "isEdit" => true, "options" => ["checked" => true]],
              ["key" => "nearly_every_day", "type" => "checkbox", "label" => "Nearly every day", "isEdit" => true, "options" => ["checked" => true]],
            ]
          ]
        ],
        "3" => [
          'name' => 'Do you take measures to address your mental health:',
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
                "score" => 2,
              ]
            ],
          ]
        ],
        "4" => [
          'name' => 'If yes, what do you do?',
          'type' => Question::SINGLE_CHOICE,
          'score' => 0,
          'data_raw' => [
            "options" => [
              [
                "content" => "Medication",
                "value" => "medication",
                "score" => 1,
              ],
              [
                "content" => "Therapy",
                "value" => "therapy",
                "score" => 1,
              ],
              [
                "content" => "Exercise",
                "value" => "exercise",
                "score" => 0,
              ],
              [
                "content" => "Meditation",
                "value" => "meditation",
                "score" => 0,
              ],
              [
                "content" => "Yoga",
                "value" => "yoga",
                "score" => 0,
              ],
              [
                "content" => "Other",
                "value" => "other",
                "score" => 0,
                "sub_question" => [
                  "content" => "",
                  "type" => Question::FILL_BLANK,
                  "score" => 0,
                ]
              ],
            ],
          ]
        ],
      ];

      foreach($survey_question as $question) {
        $question['survey_id'] = 3;
        $question = Question::create($question);
      }
    }
}
