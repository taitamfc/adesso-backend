<?php

namespace Database\Seeders\GoalQuestion;

use App\Models\Question;
use Illuminate\Database\Seeder;
class GoalQuestionSeeder4 extends Seeder
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
          'name' => 'What steps did you take to live from the heart today?',
          'type' => Question::FILL_BLANK,
          'score' => 0
        ],
        "2" => [
          'name' => 'Select the specific areas you want to track.',
          'type' => Question::SINGLE_CHOICE,
          'score' => 0,
          'data_raw' => [
            "options" => [
              [
                "content" => "How many hours did you sleep?",
                "value" => "how_many_hours_did_you_sleep",
                "score" => 0,
                "sub_question" => [
                  "content" => "",
                  "type" => Question::FILL_BLANK,
                  "score" => 0
                ]
              ],
              [
                "content" => "What was your weight today?",
                "value" => "what_was_your_weight_today",
                "score" => 0,
                "sub_question" => [
                  "content" => "",
                  "type" => Question::FILL_BLANK,
                  "score" => 0
                ]
              ],
              [
                "content" => "How many drinks did you drink today?",
                "value" => "how_many_drinks_did_you_drink_today",
                "score" => 0,
                "sub_question" => [
                  "content" => "",
                  "type" => Question::FILL_BLANK,
                  "score" => 0
                ]
              ],
              [
                "content" => "Did you smoke (or vape) today?",
                "value" => "did_you_smoke_or_vape_today",
                "score" => 0,
                "sub_question" => [
                  "content" => "",
                  "type" => Question::TRUE_FALSE,
                  "score" => 0,
                  "data_raw" => [
                    "options" => [
                      [
                        "content" => "Yes",
                        "value" => "yes",
                        "score" => 0,
                      ],
                      [
                        "content" => "No",
                        "value" => "no",
                        "score" => 0,
                      ]
                    ]
                  ]
                ]
              ],
              [
                "content" => "Did you take your prescribed medication or supplements today?",
                "value" => "did_you_take_your_prescribed_medication_or_supplements_today",
                "score" => 0,
                "sub_question" => [
                  "content" => "",
                  "type" => Question::TRUE_FALSE,
                  "score" => 0,
                  "data_raw" => [
                    "options" => [
                      [
                        "content" => "Yes",
                        "value" => "yes",
                        "score" => 0,
                      ],
                      [
                        "content" => "No",
                        "value" => "no",
                        "score" => 0,
                      ]
                    ]
                  ]
                ]
              ],
              [
                "content" => "Journal about your daily activities.",
                "value" => "journal_about_your_daily_activities",
                "score" => 0,
                "sub_question" => [
                  "content" => "",
                  "type" => Question::FILL_BLANK,
                  "score" => 0
                ]
              ],
              [
                "content" => "On a scale of 1-5, how would you rate your heart habits for the day?",
                "value" => "on_a_scale_of_1_5_how_would_you_rate_your_heart_habits_for_the_day",
                "score" => 0
              ]
            ]
          ]
        ],
        "3" => [
          'name' => 'Go Deepers:',
          'type' => Question::SINGLE_CHOICE,
          'score' => 0,
          'data_raw' => [
            "options" => [
              [
                "content" => "Learn How to Meditate and Commit to a Practice ",
                "value" => "learn_how_to_meditate",
                "score" => 0,
                "sub_question" => [
                  "content" => "",
                  "type" => Question::SINGLE_CHOICE,
                  "score" => 0,
                  "data_raw" => [
                    "options" => [
                      [
                        "content" => "How to meditate",
                        "value" => "how_to_meditate",
                        "score" => 0,
                      ],
                      [
                        "content" => "Learn a specific type of meditation and commit to it (TM is 20 minutes twice a day)",
                        "value" => "learn_a_specific_type",
                        "score" => 0,
                      ],
                      [
                        "content" => "App help",
                        "value" => "app_help",
                        "score" => 0,
                      ]
                    ]
                  ]
                ],
              ],
              [
                "content" => "Relieve Stress through Movement",
                "value" => "relieve_stress_through_movement",
                "score" => 0
              ],
              [
                "content" => "Practice Better Sleep Habits",
                "value" => "practice_better_sleep_habits",
                "score" => 0
              ],
              [
                "content" => "Practice breathing methods once a day.",
                "value" => "practice_breathing_methods",
                "score" => 0
              ],
              [
                "content" => "Seek out a therapist (tips for finding a therapist",
                "value" => "seek_out_a_therapist",
                "score" => 0
              ],
              [
                "content" => "Counteract your triggers",
                "value" => "counteract_your_triggers",
                "score" => 0
              ],
              [
                "content" => "Use Tapping to Relieve Stress",
                "value" => "use_tapping_to_relieve_stress",
                "score" => 0
              ],
              [
                "content" => "Behavior Motive Therapy",
                "value" => "behavior_motive_therapy",
                "score" => 0
              ]
            ],
          ]
        ],
        "4" => [
          'name' => 'Go Deepers:',
          'type' => Question::SINGLE_CHOICE,
          'score' => 0,
          'data_raw' => [
            "options" => [
              [
                "content" => "Research Your Family History",
                "value" => "research_your_family_history",
                "score" => 0
              ],
              [
                "content" => "Schedule a physical/check-up",
                "value" => "schedule_a_physical_check_up",
                "score" => 0
              ],
              [
                "content" => "Reduce and Quit Smoking ",
                "value" => "reduce_and_quit_smoking",
                "score" => 0
              ],
              [
                "content" => "Manage Your Alcohol Habits",
                "value" => "manage_your_alcohol_habits",
                "score" => 0
              ],
              [
                "content" => "Manage Your Weight",
                "value" => "manage_your_weight",
                "score" => 0
              ],
              [
                "content" => "Improve Your Sleep",
                "value" => "improve_your_sleep",
                "score" => 0
              ]
            ],
          ]
        ]
      ];

      foreach($goal_question as $question) {
        $question['goal_id'] = 4;
        $question = Question::create($question);
      }
    }
}
