<?php

namespace App\Services;

use App\Models\MyGoal;
use App\Repositories\MyGoalRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MyGoalService {

    protected $myGoalRepository;

    public function __construct(
        MyGoalRepository $myGoalRepository
    )
    {
        $this->myGoalRepository = $myGoalRepository;
    }

    public function answerQuestions(MyGoal $myGoal, array $answerQuestions)
    {
        try {
            DB::beginTransaction();
            $user = Auth::user();

            /**
             * save score answer survey
             */
            $answerGoal = $myGoal->answerGoals()->updateOrCreate([
                'goal_id' => $myGoal->goal_id,
                'user_id' => $user->id,
            ],
            [
                'score' => 0,
                'status' => 1
            ]);

            foreach ($answerQuestions as $question) {
                $answerGoal->answerQuestions()->updateOrCreate([
                    'question_id' => $question['id'],
                    'goal_id' => $myGoal->goal_id,
                ], [
                    'type' => $question['type'] ?? '',
                    'name' => $question['name'] ?? '',
                    'description' => $question['description'] ?? '',
                    'data_raw' => $question['data_raw'],
                    'dependency' => $question['dependency'] ?? '',
                    'score' => $question['score'] ?? '',
                ]);
            }

            DB::commit();
            return $answerGoal->answerQuestions;
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }


}
