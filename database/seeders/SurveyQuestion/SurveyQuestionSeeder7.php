<?php

namespace Database\Seeders\SurveyQuestion;

use App\Models\Question;
use Illuminate\Database\Seeder;

class SurveyQuestionSeeder7 extends Seeder
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
        'name' => 'Read the list below and check any symptoms you have felt in the last 3-6 months:',
        'type' => Question::MULTIPLE_CHOICE,
        'score' => 0,
        'data_raw' => [
          "intro" => [
            "title" => "Heart Symptoms",
            "description" => "It matters most if you have any symptoms
            when you are just going about your life and
            getting through your days. Sometimes we
            don't even pay attention to how we feel. Let's
            just take a moment to reflect on that. Think
            about how you have been feeling and if your
            body might be trying to tell you something.
            Sometimes we just need to listen!",
          ],
          "options" => [
            [
              "content" => "Chest pain/pressure/tightness with exertion",
              "value" => "chest_pain",
              "score" => 3,
            ],
            [
              "content" => "Chest discomfort",
              "value" => "chest_discomfort",
              "score" => 2,
            ],
            [
              "content" => "Radiation of pain to shoulder, neck, jaw or back",
              "value" => "radiation_of_pain",
              "score" => 3,
            ],
            [
              "content" => "Shortness of breath – not associated with exercise",
              "value" => "shortness_of_breath",
              "score" => 1,
            ],
            [
              "content" => "Palpitations or pounding heart",
              "value" => "palpitations_or_pounding_heart",
              "score" => 1,
            ],
            [
              "content" => "Unable to walk a block without stopping",
              "value" => "unable_to_walk_a_block_without_stopping",
              "score" => 3,
            ],
            [
              "content" => "Unable to walk 2 flights of stairs/uphill",
              "value" => "unable_to_walk_2_flights_of_stairs_uphill",
              "score" => 2,
            ],
            [
              "content" => "Unable to run short distances",
              "value" => "unable_to_run_short_distances",
              "score" => 2,
            ],
            [
              "content" => "Inability to do moderate recreational activity due to fatigue",
              "value" => "inability_to_do_moderate_recreational_activity_due_to_fatigue",
              "score" => 1,
            ],
            [
              "content" => "Inability to have sexual relations",
              "value" => "inability_to_have_sexual_relations",
              "score" => 1,
            ],
            [
              "content" => "Nausea or vomiting with exertion",
              "value" => "nausea_or_vomiting_with_exertion",
              "score" => 3,
            ],
            [
              "content" => "Lightheadedness or faintness",
              "value" => "lightheadedness_or_faintness",
              "score" => 1,
            ],
            [
              "content" => "Other",
              "value" => "other",
              "score" => 1,
              "sub_question" => [
                "content" => "",
                "type" => Question::FILL_BLANK,
                "score" => 0,
              ]
            ],
          ],
        ]
      ]
    ];

    foreach($survey_question as $question) {
      $question['survey_id'] = 7;
      $question = Question::create($question);
    }
  }
}
