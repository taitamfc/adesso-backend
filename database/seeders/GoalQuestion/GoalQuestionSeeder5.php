<?php

namespace Database\Seeders\GoalQuestion;

use App\Models\Question;
use Illuminate\Database\Seeder;
class GoalQuestionSeeder5 extends Seeder
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
                "content" => "Track and journal about your relationships:",
                "value" => "track_and_journal_about_your_relationships",
                "score" => 0,
                "sub_question" => [
                  "content" => "",
                  "type" => Question::SINGLE_CHOICE,
                  "score" => 0,
                  "data_raw" => [
                    "options" => [
                      [
                        "content" => "Who energized you today and why?",
                        "value" => "who_energized_you_today",
                        "score" => 0,
                      ],
                      [
                        "content" => "Who drained you and why?",
                        "value" => "who_drained_you",
                        "score" => 0,
                      ],
                      [
                        "content" => "What can you do tomorrow to ensure that those around you are supporting you towards your passion and purpose?",
                        "value" => "what_can_you_do_tomorrow",
                        "score" => 0,
                      ],
                    ]
                  ]
                ]
              ],
              [
                "content" => "On a scale of 1-5, rate the quality of these areas of your life:",
                "value" => "track_your_heart_rate_during_exercise",
                "score" => 0,
                "sub_question" => [
                  "content" => "",
                  "type" => Question::SINGLE_CHOICE,
                  "score" => 0,
                  "data_raw" => [
                    "options" => [
                      [
                        "content" => "Work",
                        "value" => "work",
                        "score" => 0,
                      ],
                      [
                        "content" => "Partner",
                        "value" => "partner",
                        "score" => 0,
                      ],
                      [
                        "content" => "Friends and family",
                        "value" => "friends_and_family",
                        "score" => 0,
                      ],
                      [
                        "content" => "Community",
                        "value" => "community",
                        "score" => 0,
                      ],
                      [
                        "content" => "Passion (Hobbies/Creativity/Etc)",
                        "value" => "passion",
                        "score" => 0,
                      ],
                      [
                        "content" => "Purpose",
                        "value" => "purpose",
                        "score" => 0,
                      ],
                    ]
                  ]
                ]
              ],
            ],
          ]
        ],
        "2" => [
          'name' => 'Go Deepers:',
          'type' => Question::SINGLE_CHOICE,
          'score' => 0,
          'data_raw' => [
            "options" => [
              [
                "content" => "Strengthen your work relationships.",
                "value" => "strengthen_your_work_relationships",
                "score" => 0
              ],
              [
                "content" => "Strengthen time with your partner.",
                "value" => "strengthen_time_with_your_partner",
                "score" => 0,
                "sub_question" => [
                  "content" => "",
                  "type" => Question::SINGLE_CHOICE,
                  "score" => 0,
                  "data_raw" => [
                    "options" => [
                      [
                        "content" => "Set up a date night",
                        "value" => "set_up_a_date_night",
                        "score" => 0,
                      ]
                    ]
                  ]
                ]
              ],
              [
                "content" => "Strengthen your relationships with friends and family",
                "value" => "strengthen_your_relationships_with_friends_and_family",
                "score" => 0,
                "sub_question" => [
                  "content" => "",
                  "type" => Question::SINGLE_CHOICE,
                  "score" => 0,
                  "data_raw" => [
                    "options" => [
                      [
                        "content" => "Meet up with 1 family member or friend to strengthen your relationship.",
                        "value" => "meet_up_with_1_family_member_or_friend_to_strengthen_your_relationship",
                        "score" => 0,
                      ]
                    ]
                  ]
                ]
              ],
              [
                "content" => "Contribute to your community",
                "value" => "contribute_to_your_community",
                "score" => 0,
                "sub_question" => [
                  "content" => "",
                  "type" => Question::SINGLE_CHOICE,
                  "score" => 0,
                  "data_raw" => [
                    "options" => [
                      [
                        "content" => "attendance/engagement with community.",
                        "value" => "attendance_engagement_with_community",
                        "score" => 0,
                      ],
                      [
                        "content" => "Attend a community evento",
                        "value" => "attend_a_community_evento",
                        "score" => 0,
                      ]
                    ]
                  ]
                ]
              ],
              [
                "content" => "Get involved with a hobby/passion.",
                "value" => "get_involved_with_a_hobby_passion",
                "score" => 0,
                "sub_question" => [
                  "content" => "",
                  "type" => Question::SINGLE_CHOICE,
                  "score" => 0,
                  "data_raw" => [
                    "options" => [
                      [
                        "content" => "Exercise a hobby",
                        "value" => "exercise_a_hobby",
                        "score" => 0,
                      ]
                    ]
                  ]
                ]
              ],
              [
                "content" => "Live with purpose.",
                "value" => "live_with_purpose",
                "score" => 0,
                "sub_question" => [
                  "content" => "",
                  "type" => Question::SINGLE_CHOICE,
                  "score" => 0,
                  "data_raw" => [
                    "options" => [
                      [
                        "content" => "Do one thing to support your purpose",
                        "value" => "do_one_thing_to_support_your_purpose",
                        "score" => 0,
                      ]
                    ]
                  ]
                ]
              ]
            ],
          ]
        ]
      ];

      foreach($goal_question as $question) {
        $question['goal_id'] = 5;
        $question = Question::create($question);
      }
    }
}
