<?php

namespace Database\Seeders\GoalQuestion;

use App\Models\Question;
use Illuminate\Database\Seeder;
class GoalQuestionSeeder3 extends Seeder
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
          'name' => 'Actions:',
          'type' => Question::SINGLE_CHOICE,
          'score' => 0,
          'data_raw' => [
            "options" => [
              [
                "content" => "Track and journal your emotions and mental health practices.",
                "value" => "track_and_journal_your_emotions",
                "score" => 0,
                "sub_question" => [
                  "content" => "",
                  "type" => Question::SINGLE_CHOICE,
                  "score" => 0,
                  "data_raw" => [
                    "options" => [
                      [
                        "content" => "Log your emotional journal for the day.",
                        "value" => "log_your_emotional_journal",
                        "score" => 0,
                        "sub_question" => [
                          "content" => "",
                          "type" => Question::SINGLE_CHOICE,
                          "score" => 0,
                          "data_raw" => [
                            "options" => [
                              [
                                "content" => "Choose an event where you encountered profound emotions today.",
                                "value" => "choose_an_event",
                                "score" => 0,
                              ],
                              [
                                "content" => "How did you manage your emotional experience?",
                                "value" => "how_did_you_manage",
                                "score" => 0,
                              ],
                              [
                                "content" => "What practices did you use to manage your emotions?",
                                "value" => "what_practices_did_you_use",
                                "score" => 0,
                              ]
                            ]
                          ]
                        ],
                      ]
                    ]
                  ]
                ]
              ]
            ],
          ]
        ],
        "2" => [
          'name' => 'On a scale of 1-5, how would you rate how you managed difficult emotions today?',
          'type' => Question::SLIDE,
          'score' => 0,
          'data_raw' => [
            "length" => 5
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
        ]
      ];

      foreach($goal_question as $question) {
        $question['goal_id'] = 3;
        $question = Question::create($question);
      }
    }
}
