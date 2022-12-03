<?php

namespace Database\Seeders\GoalQuestion;

use App\Models\Question;
use Illuminate\Database\Seeder;
class GoalQuestionSeeder6 extends Seeder
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
                "content" => "Track your weight",
                "value" => "track_your_weight",
                "score" => 0,
              ],
              [
                "content" => "Track your resting heart rate",
                "value" => "track_your_resting_heart_rate",
                "score" => 0,
              ],
              [
                "content" => "Track your heart rate during exercise",
                "value" => "track_your_heart_rate_during_exercise",
                "score" => 0,
              ],
            ],
          ]
        ],
        "2" => [
          'name' => 'What do you want to do today that could improve your numbers?',
          'type' => Question::FILL_BLANK,
          'score' => 0,
        ],
        "3" => [
          'name' => 'What have you done to increase your medical knowledge or take steps towards your testing efforts?',
          'type' => Question::FILL_BLANK,
          'score' => 0,
        ],
        "4" => [
          'name' => 'What steps are you taking to improve your heart score?',
          'type' => Question::FILL_BLANK,
          'score' => 0,
        ],
        "5" => [
          'name' => 'On a scale of 1-5, rate your ability to exercise. On a scale of 1-5, how did I empower myself to be more knowledgeable about my heart health?
          ',
          'type' => Question::FILL_BLANK,
          'score' => 0,
        ],
        "6" => [
          'name' => 'Go Deepers:',
          'type' => Question::SINGLE_CHOICE,
          'score' => 0,
          'data_raw' => [
            "options" => [
              [
                "content" => "Get your blood pressure taken easily and know what it means.",
                "value" => "get_your_blood_pressure_taken_easily_and_know_what_it_means",
                "score" => 0
              ],
              [
                "content" => "Use a remote patient monitoring device.",
                "value" => "use_a_remote_patient_monitoring_device",
                "score" => 0
              ],
              [
                "content" => "Test to determine whether you have hereditary cholesterol or diabetes issues. ",
                "value" => "test_to_determine_whether_you_have_hereditary_cholesterol_or_diabetes_issues",
                "score" => 0
              ],
              [
                "content" => "Getting your cholesterol numbers",
                "value" => "getting_your_cholesterol_numbers",
                "score" => 0,
                "sub_question" => [
                  "content" => "",
                  "type" => Question::SINGLE_CHOICE,
                  "score" => 0,
                  "data_raw" => [
                    "options" => [
                      [
                        "content" => "What they mean.",
                        "value" => "what_they_mean",
                        "score" => 0,
                      ],
                      [
                        "content" => "What you can do",
                        "value" => "what_you_can_do",
                        "score" => 0,
                      ]
                    ]
                  ]
                ]
              ],
              [
                "content" => "Get inflammation levels (C-reactive Protein levels)",
                "value" => "get_inflammation_levels_c_reactive_protein_levels",
                "score" => 0,
                "sub_question" => [
                  "content" => "",
                  "type" => Question::SINGLE_CHOICE,
                  "score" => 0,
                  "data_raw" => [
                    "options" => [
                      [
                        "content" => "What they mean.",
                        "value" => "what_they_mean",
                        "score" => 0,
                      ],
                      [
                        "content" => "What you can do",
                        "value" => "what_you_can_do",
                        "score" => 0,
                      ]
                    ]
                  ]
                ]
              ],
              [
                "content" => "Determine if you have the ApoE gene",
                "value" => "determine_if_you_have_the_apoe_gene",
                "score" => 0,
                "sub_question" => [
                  "content" => "",
                  "type" => Question::SINGLE_CHOICE,
                  "score" => 0,
                  "data_raw" => [
                    "options" => [
                      [
                        "content" => "ApoE 2 and 4",
                        "value" => "apoe_2_and_4",
                        "score" => 0,
                      ],
                      [
                        "content" => "Test to determine whether you have the ApoE gene. ",
                        "value" => "test_to_determine_whether_you_have_the_apoe_gene",
                        "score" => 0,
                      ],
                      [
                        "content" => "What this means",
                        "value" => "what_this_means",
                        "score" => 0,
                      ],
                      [
                        "content" => "What you can do",
                        "value" => "what_you_can_do",
                        "score" => 0,
                      ]
                    ]
                  ]
                ]
              ],
              [
                "content" => "Get blood sugar levels (Glucose, A1C)",
                "value" => "get_blood_sugar_levels_glucose_a1c",
                "score" => 0,
                "sub_question" => [
                  "content" => "",
                  "type" => Question::SINGLE_CHOICE,
                  "score" => 0,
                  "data_raw" => [
                    "options" => [
                      [
                        "content" => "What they mean.",
                        "value" => "what_they_mean",
                        "score" => 0,
                      ],
                      [
                        "content" => "What you can do",
                        "value" => "what_you_can_do",
                        "score" => 0,
                      ]
                    ]
                  ]
                ]
              ],
              [
                "content" => "Getting your blood pressure",
                "value" => "getting_your_blood_pressure",
                "score" => 0,
                "sub_question" => [
                  "content" => "",
                  "type" => Question::SINGLE_CHOICE,
                  "score" => 0,
                  "data_raw" => [
                    "options" => [
                      [
                        "content" => "What they mean.",
                        "value" => "what_they_mean",
                        "score" => 0,
                      ],
                      [
                        "content" => "What you can do",
                        "value" => "what_you_can_do",
                        "score" => 0,
                      ]
                    ]
                  ]
                ]
              ],
              [
                "content" => "Get an echocardiogram",
                "value" => "get_an_echocardiogram",
                "score" => 0
              ],
              [
                "content" => "Get a CPET",
                "value" => "get_a_cpet",
                "score" => 0
              ],
              [
                "content" => "Get a calcium score.",
                "value" => "get_a_calcium_score",
                "score" => 0
              ],
              [
                "content" => "Get an echocardiogram and understand cardiomyopathy",
                "value" => "get_an_echocardiogram_and_understand_cardiomyopathy",
                "score" => 0
              ],
              [
                "content" => "Get a carotid artery doppler and understand strokes",
                "value" => "get_a_carotid_artery_doppler_and_understand_strokes",
                "score" => 0
              ],
              [
                "content" => "Get a heart rate monitor",
                "value" => "get_a_heart_rate_monitor",
                "score" => 0
              ],
            ],
          ]
        ]
      ];

      foreach($goal_question as $question) {
        $question['goal_id'] = 6;
        $question = Question::create($question);
      }
    }
}
