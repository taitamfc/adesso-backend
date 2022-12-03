<?php

namespace Database\Seeders\SurveyQuestion;

use App\Models\Question;
use Illuminate\Database\Seeder;

class SurveyQuestionSeeder8 extends Seeder
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
        'name' => 'OB/GYN History:',
        'type' => Question::MULTIPLE_CHOICE,
        'score' => 0,
        'data_raw' => [
          "options" => [
            [
              "content" => "History of miscarriage.",
              "value" => "history_of_miscarriage",
              "score" => 1,
              "sub_question" => [
                "name" => "If Yes, how many?",
                "type" => Question::FILL_BLANK,
                "score" => "add_1_point_for_each",
              ]
            ],
            [
              "content" => "Premature birth (less than 35 weeks):",
              "value" => "premature_birth",
              "score" => 1
            ],
            [
              "content" => "Polycystic ovarian syndrome",
              "value" => "polycystic_ovarian_syndrome",
              "score" => 1
            ],
            [
              "content" => "Gestational Diabetes",
              "value" => "gestational_diabetes",
              "score" => 3,
            ],
            [
              "content" => "Elevated sugars during pregnancy",
              "value" => "elevated_sugars_during_pregnancy",
              "score" => 1
            ],
            [
              "content" => "Preeclampsia/Elevated blood pressure in pregnancy",
              "value" => "preeclampsia_elevated_blood_pressure_in_pregnancy",
              "score" => 3,
            ],
            [
              "content" => "Placenta Previa",
              "value" => "placenta_previa",
              "score" => 3
            ],
          ],
        ]
      ],
      "2" => [
        'name' => 'At what age did you undergo menopause:',
        'type' => Question::SINGLE_CHOICE,
        'score' => 0,
        'data_raw' => [
          "section" => [
            "title" => "Menopause:",
            "description" => "Answer the following questions if you have gone through menopause:",
          ],
          "options" => [
            [
              "content" => "<45yrs",
              "value" => "less_than_45",
              "score" => 3
            ],
            [
              "content" => ">=45yrs",
              "value" => "greater_than_or_equal_to_45",
              "score" => 0
            ],
          ],
        ]
      ],
      "3" => [
        'name' => 'If yes:  was it started',
        'type' => Question::SINGLE_CHOICE,
        'score' => 0,
        'data_raw' => [
          "section" => [
            "title" => "",
            "description" => "Are you on Hormone replacement Therapy? Y/N",
          ],
          "options" => [
            [
              "content" => "within 10 years after menopause?",
              "value" => "within_10_years_after_menopause",
              "score" => 0
            ],
            [
              "content" => "0 >10yrs after menopause",
              "value" => "greater_than_10_years_after_menopause",
              "score" => 2
            ],
            [
              "content" => "Oral?",
              "value" => "oral",
              "score" => 3
            ],
            [
              "content" => "Patch?",
              "value" => "patch",
              "score" => 0
            ],
            [
              "content" => "Cream?",
              "value" => "cream",
              "score" => 0
            ],
          ],
        ]
      ],
      "4" => [
        'name' => 'Are you experiencing any symptoms?  Check all that apply',
        'type' => Question::MULTIPLE_CHOICE,
        'score' => 0,
        'data_raw' => [
          "options" => [
            [
              "content" => "Hot Flashes ",
              "value" => "hot_flashes",
              "score" => 1
            ],
            [
              "content" => "Inability to sleep",
              "value" => "inability_to_sleep",
              "score" => 0
            ],
            [
              "content" => "Moodiness/Irritability",
              "value" => "moodiness_irritability",
              "score" => 0
            ],
            [
              "content" => "Forgetfulness or cognitive changes",
              "value" => "forgetfulness_or_cognitive_changes",
              "score" => 0
            ],
            [
              "content" => "Night Sweats",
              "value" => "night_sweats",
              "score" => 0
            ],
            [
              "content" => "Insomnia",
              "value" => "insomnia",
              "score" => 0
            ]
          ],
        ]
      ],
    ];

    foreach($survey_question as $question) {
      $question['survey_id'] = 8;
      $question = Question::create($question);
    }
  }
}
