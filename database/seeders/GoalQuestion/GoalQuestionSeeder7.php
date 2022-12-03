<?php

namespace Database\Seeders\GoalQuestion;

use App\Models\Question;
use Illuminate\Database\Seeder;
class GoalQuestionSeeder7 extends Seeder
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
          'name' => 'Go Deepers:',
          'type' => Question::SINGLE_CHOICE,
          'score' => 0,
          'data_raw' => [
            "section" => [
              "title" => "",
              "description" => "This session will encourage them to go back to the first five session goals and prioritize them.",
            ],
            "options" => [
              [
                "content" => "Understand the Diseases that Affect Your Heart Muscle",
                "value" => "understand_the_diseases_that_affect_your_heart_muscle",
                "score" => 0
              ],
              [
                "content" => "Understand the Diseases that Affect Your Heart’s Arteries",
                "value" => "understand_the_diseases_that_affect_your_hearts_arteries",
                "score" => 0
              ],
              [
                "content" => "Understand the Diseases that Affect Your Heart’s Electrical System",
                "value" => "understand_the_diseases_that_affect_your_hearts_electrical_system",
                "score" => 0
              ],
              [
                "content" => "Understand the Diseases that Affect Your Heart’s Valves",
                "value" => "understand_the_diseases_that_affect_your_hearts_valves",
                "score" => 0
              ],
              [
                "content" => "Research Your Family’s Heart History",
                "value" => "research_your_familys_heart_history",
                "score" => 0,
                "sub_question" => [
                  "content" => "",
                  "type" => Question::SINGLE_CHOICE,
                  "score" => 0,
                  "data_raw" => [
                    "options" => [
                      [
                        "content" => "Create a family tree and indicate family members that are or were affected by or may have had symptoms of heart disease.",
                        "value" => "create_a_family_tree_and_indicate_family_members_that_are_or_were_affected_by_or_may_have_had_symptoms_of_heart_disease",
                        "score" => 0,
                      ],
                      [
                        "content" => "Reach out to your family members to ask them about specific family members you are unsure of.",
                        "value" => "reach_out_to_your_family_members_to_ask_them_about_specific_family_members_you_are_unsure_of",
                        "score" => 0,
                      ],
                      [
                        "content" => "Create a list of family members and their risk and a summary of your family heart risks.",
                        "value" => "create_a_list_of_family_members_and_their_risk_and_a_summary_of_your_family_heart_risks",
                        "score" => 0,
                      ],
                      [
                        "content" => "Share family history information with your doctor on a regular basis and discuss a plan to mitigate these risks.",
                        "value" => "share_family_history_information_with_your_doctor_on_a_regular_basis_and_discuss_a_plan_to_mitigate_these_risks",
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
        $question['goal_id'] = 7;
        $question = Question::create($question);
      }
    }
}
