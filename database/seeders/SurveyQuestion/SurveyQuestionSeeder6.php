<?php

namespace Database\Seeders\SurveyQuestion;

use App\Models\Question;
use Illuminate\Database\Seeder;

class SurveyQuestionSeeder6 extends Seeder
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
        'name' => 'Past Heart History:  (check all that apply):',
        'type' => Question::MULTIPLE_CHOICE,
        'score' => 0,
        'data_raw' => [
          "options" => [
            [
              "content" => "Heart Attack",
              "value" => "heart_attack",
              "score" => 3,
            ],
            [
              "content" => "Stroke/TIA",
              "value" => "stroke_tia",
              "score" => 3,
            ],
            [
              "content" => "Stent/PTCA",
              "value" => "stent_ptca",
              "score" => 3,
            ],
            [
              "content" => "Coronary Artery Bypass Grafting (CABG):",
              "value" => "coronary_artery_bypass_grafting_cabg",
              "score" => 3,
            ],
            [
              "content" => "Peripheral Vascular Disease",
              "value" => "peripheral_vascular_disease",
              "score" => 3,
            ],
            [
              "content" => "Aortic Aneurysm",
              "value" => "aortic_aneurysm",
              "score" => 3,
            ],
            [
              "content" => "History of Covid-19",
              "value" => "history_of_covid_19",
              "score" => 2,
            ],
          ],
        ]
      ],
      "2" => [
        'name' => 'Carotid artery dopplers.',
        'type' => Question::SINGLE_CHOICE,
        'score' => 0,
        'data_raw' => [
          "section" => [
            "title" => "",
            "description" => "PLEASE ENTER YOUR NUMBERS IF YOU KNOW THEM. 
            IF NOT, SKIP TO THE. NEXT QUESTION.
            YOU WILL STILL RECEIVE A SCORE IT JUST WON’T BE AS ACCURATE.
            ",
          ],
          "options" => [
            [
              "content" => "normal",
              "value" => "normal",
              "score" => 0,
            ],
            [
              "content" => "carotid intima-medial thickness (CIMT)",
              "value" => "carotid_intima_medial_thickness_cimt",
              "score" => 1,
            ],
            [
              "content" => "25-49%",
              "value" => "25_49_percent",
              "score" => 1
            ],
            [
              "content" => "50-69%",
              "value" => "50_69_percent",
              "score" => 2
            ],
            [
              "content" => ">70%",
              "value" => "more_than_70_percent",
              "score" => 3,
            ]
          ],
        ]
      ],
      "3" => [
        'name' => 'Elevated Calcium Score:',
        'type' => Question::SINGLE_CHOICE,
        'score' => 0,
        'data_raw' => [
          "options" => [
            [
              "content" => "0-10 (min)",
              "value" => "0_10_min",
              "score" => 0,
            ],
            [
              "content" => "11-100 (mild)",
              "value" => "11_100_mild",
              "score" => 1,
            ],
            [
              "content" => "101 – 400 (moderate)",
              "value" => "101_400_moderate",
              "score" => 2
            ],
            [
              "content" => ">400 (severe)",
              "value" => "more_than_400_severe",
              "score" => 3
            ]
          ],
        ]
      ],
      "4" => [
        'name' => 'Other past medical history:',
        'type' => Question::MULTIPLE_CHOICE,
        'score' => 0,
        'data_raw' => [
          "options" => [
            [
              "content" => "Diabetes",
              "value" => "diabetes",
              "score" => 3
            ],
            [
              "content" => "Elevated sugar",
              "value" => "elevated_sugar",
              "score" => 2
            ],
            [
              "content" => "High cholesterol",
              "value" => "high_cholesterol",
              "score" => 3
            ]
          ],
        ]
      ],
      "5" => [
        'name' => 'Cholesterol',
        'type' => Question::SINGLE_CHOICE,
        'score' => 0,
        'data_raw' => [
          "section" => [
            "title" => "Do you know your numbers?",
            "description" => "YES -> continue below.  	NO – skip to next question***",
          ],
          "options" => [
            [
              "content" => "<200",
              "value" => "less_than_200",
              "score" => 0,
            ],
            [
              "content" => "200-239",
              "value" => "200_to_239",
              "score" => 1
            ],
            [
              "content" => ">240",
              "value" => "more_than_240",
              "score" => 2
            ],
          ],
        ]
      ],
      "6" => [
        'name' => 'LDL:',
        'type' => Question::SINGLE_CHOICE,
        'score' => 0,
        'data_raw' => [
          "options" => [
            [
              "content" => "<100",
              "value" => "less_than_100",
              "score" => 0,
            ],
            [
              "content" => "101-130",
              "value" => "101_to_130",
              "score" => 1
            ]
          ],
        ]
      ],
      "7" => [
        'name' => 'HDL:',
        'type' => Question::SINGLE_CHOICE,
        'score' => 0,
        'data_raw' => [
          "options" => [
            [
              "content" => "<50",
              "value" => "less_than_50",
              "score" => 2
            ],
            [
              "content" => "51-60",
              "value" => "51_to_60",
              "score" => 1
            ],
            [
              "content" => ">61",
              "value" => "more_than_61",
              "score" => 0
            ]
          ],
        ]
      ],
      "8" => [
        'name' => 'HDL:',
        'type' => Question::SINGLE_CHOICE,
        'score' => 0,
        'data_raw' => [
          "options" => [
            [
              "content" => "<50",
              "value" => "less_than_50",
              "score" => 2
            ],
            [
              "content" => "51-60",
              "value" => "51_to_60",
              "score" => 1
            ],
            [
              "content" => ">61",
              "value" => "more_than_61",
              "score" => 0
            ]
          ],
        ]
      ],
      "9" => [
        'name' => 'Triglycerides:',
        'type' => Question::SINGLE_CHOICE,
        'score' => 0,
        'data_raw' => [
          "options" => [
            [
              "content" => "<150",
              "value" => "less_than_150",
              "score" => 0
            ],
            [
              "content" => "151-199",
              "value" => "151_to_199",
              "score" => 1
            ],
            [
              "content" => "200-499",
              "value" => "200_to_499",
              "score" => 2
            ],
            [
              "content" => ">500",
              "value" => "more_than_500",
              "score" => 3
            ]
          ],
        ]
      ],
      "10" => [
        'name' => 'Lp(a):',
        'type' => Question::SINGLE_CHOICE,
        'score' => 0,
        'data_raw' => [
          "options" => [
            [
              "content" => "<30",
              "value" => "less_than_30",
              "score" => 0
            ],
            [
              "content" => "31-50",
              "value" => "31_to_50",
              "score" => 1
            ],
            [
              "content" => ">50",
              "value" => "more_than_50",
              "score" => 2
            ]
          ],
        ]
      ],
      "11" => [
        'name' => 'Cholesterol',
        'type' => Question::SINGLE_CHOICE,
        'score' => 0,
        'data_raw' => [
          "section" => [
            "title" => "Do you have Elevated Sugars?",
            "description" => "YES-> continue.  NO- skip to next question***",
          ],
          "options" => [
            [
              "content" => "<5.7",
              "value" => "less_than_5.7",
              "score" => 0,
            ],
            [
              "content" => "5.7-6.4",
              "value" => "5.7_to_6.4",
              "score" => 1
            ],
            [
              "content" => ">6.5",
              "value" => "more_than_6.5",
              "score" => 2
            ],
          ],
        ]
      ],
      "12" => [
        'name' => 'Do you know your numbers?',
        'type' => Question::SINGLE_CHOICE,
        'score' => 0,
        'data_raw' => [
          "section" => [
            "title" => "High blood pressure:",
            "description" => "YES -> continue below. 	NO- skip to next question***",
          ],
          "options" => [
            [
              "content" => "< 120/80",
              "value" => "less_than_120_80",
              "score" => 0,
            ],
            [
              "content" => "> 130/80-139/89",
              "value" => "more_than_130_80_to_139_89",
              "score" => 1
            ],
            [
              "content" => "> 140/90-159/99",
              "value" => "more_than_140_90_to_159_99",
              "score" => 2
            ],
            [
              "content" => "> 160/100",
              "value" => "more_than_160_100",
              "score" => 3
            ],
          ],
        ]
      ],
      "13" => [
        'name' => 'Do you have sleep apnea?',
        'type' => Question::TRUE_FALSE,
        'score' => 0,
        'data_raw' => [
          "options" => [
            [
              "value" => "yes",
              "content" => "Yes",
              "score" => 2,
            ],
            [
              "value" => "no",
              "content" => "No",
              "score" => 0,
            ]
          ],
        ]
      ],
      "14" => [
        'name' => 'Do you have sleep apnea?',
        'type' => Question::TRUE_FALSE,
        'score' => 0,
        'data_raw' => [
          "options" => [
            [
              "value" => "yes",
              "content" => "Yes",
              "score" => 2,
            ],
            [
              "value" => "no",
              "content" => "No",
              "score" => 0,
            ]
          ],
        ]
      ],
      "15" => [
        'name' => 'Do you have kidney disease?',
        'type' => Question::TRUE_FALSE,
        'score' => 0,
        'data_raw' => [
          "options" => [
            [
              "value" => "yes",
              "content" => "Yes",
              "score" => 3,
            ],
            [
              "value" => "no",
              "content" => "No",
              "score" => 0,
            ]
          ],
        ]
      ],
      "16" => [
        'name' => 'Do you have an autoimmune disease?',
        'type' => Question::TRUE_FALSE,
        'score' => 0,
        'data_raw' => [
          "options" => [
            [
              "value" => "yes",
              "content" => "Yes",
              "score" => 3,
            ],
            [
              "value" => "no",
              "content" => "No",
              "score" => 0,
            ]
          ],
        ]
      ],
      "17" => [
        'name' => 'What type?',
        'type' => Question::FILL_BLANK,
        'score' => 0,
      ],
      "18" => [
        'name' => 'Are you on Prednisone?',
        'type' => Question::TRUE_FALSE,
        'score' => 0,
        'data_raw' => [
          "options" => [
            [
              "value" => "yes",
              "content" => "Yes",
              "score" => 2,
            ],
            [
              "value" => "no",
              "content" => "No",
              "score" => 0,
            ]
          ],
        ]
      ],
      "19" => [
        'name' => 'Are you on medications? Check all those that apply to you:',
        'type' => Question::SINGLE_CHOICE,
        'score' => 0,
        'data_raw' => [
          "options" => [
            [
              "content" => "None",
              "value" => "none",
              "score" => 0
            ],
            [
              "content" => "Diabetes",
              "value" => "diabetes",
              "score" => 2
            ],
            [
              "content" => "Insulin",
              "value" => "insulin",
              "score" => 3,
              "sub_question" => [
                "content" => "",
                "type" => Question::FILL_BLANK,
                "score" => 0,
              ]
            ],
            [
              "content" => "High sugars",
              "value" => "high_sugars",
              "score" => 1,
              "sub_question" => [
                "content" => "",
                "type" => Question::FILL_BLANK,
                "score" => 0,
              ]
            ],
            [
              "content" => "Blood pressure",
              "value" => "blood_pressure",
              "score" => 1,
              "sub_question" => [
                "content" => "",
                "type" => Question::FILL_BLANK,
                "score" => 0,
              ]
            ],
            [
              "content" => "Cholesterol",
              "value" => "cholesterol",
              "score" => 1,
              "sub_question" => [
                "content" => "",
                "type" => Question::FILL_BLANK,
                "score" => 0,
              ]
            ],
            [
              "content" => "Aspirin",
              "value" => "aspirin",
              "score" => 1,
              "sub_question" => [
                "content" => "",
                "type" => Question::FILL_BLANK,
                "score" => 0,
              ]
            ]
          ],
        ]
      ],
    ];

    foreach($survey_question as $question) {
      $question['survey_id'] = 6;
      $question = Question::create($question);
    }
  }
}
