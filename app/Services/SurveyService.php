<?php

namespace App\Services;

use App\Enums\TypeAction;
use App\Models\Survey;
use App\Repositories\ActionRepository;
use App\Repositories\SurveyRepository;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SurveyService {

    protected $surveyRepository;
    protected $actionRepository;
    protected $myBeatService;

    public function __construct(
        SurveyRepository $surveyRepository,
        ActionRepository $actionRepository,
        MyBeatService $myBeatService
    )
    {
        $this->surveyRepository = $surveyRepository;
        $this->actionRepository = $actionRepository;
        $this->myBeatService = $myBeatService;
    }

    /**
     * GetDetail function
     *
     * @param [type] $id
     * @return void
     */
    public function getDetail($id)
    {
        return $this->surveyRepository
            ->getModel()
            ->with([
                'questions'
            ])
            ->findOrFail($id);
    }

    /**
     * AnswerQuestions function
     *
     * @param Survey $survey
     * @param array $answerQuestions
     * @return void
     */
    public function answerQuestions(Survey $survey, array $answerQuestions)
    {
        try {
            DB::beginTransaction();
            $user = Auth::user();
            $scoreSurvey = $this->totalScoreQuestions($answerQuestions);
    
            $heartScore = $user->heartScore;
            if (!$heartScore) {
                $heartScore = $user->heartScore()->create([
                    'score' => 0
                ]);
            }
            /**
             * save score answer survey
             */
            $answerSurvey = $heartScore->answerSurveys()->updateOrCreate([
                'survey_id' => $survey->id,
                'user_id' => $user->id,
            ],
            [
                'score' => $scoreSurvey,
                'status' => 1
            ]);

            foreach ($answerQuestions as $question) {
                $answerSurvey->answerQuestions()->updateOrCreate([
                    'question_id' => $question['id'],
                    'survey_id' => $survey->id,
                ], [
                    'type' => $question['type'] ?? '',
                    'name' => $question['name'] ?? '',
                    'description' => $question['description'] ?? '',
                    'data_raw' => $question['data_raw'],
                    'dependency' => $question['dependency'] ?? '',
                    'score' => $question['score'] ?? '',
                ]);
            }
            $heartScore->score = $heartScore->answerSurveys()->sum('score');
            $heartScore->save();

            // add score my beat;
            $actionHeartScore = $this->actionRepository->getModel()->where('key', TypeAction::KEY_HEART_SCORE)->first();
            $isAddScoreMyBeat = $user->answerSurveys()->count() == Survey::count();
            if ($actionHeartScore && $isAddScoreMyBeat) {
                $this->myBeatService->addScoreByActionAndUser($user, $actionHeartScore);
            }
            DB::commit();
            return $scoreSurvey;
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    /**
     * TotalScoreQuestions function
     *
     * @param array $answerQuestions
     * @return int
     */
    private function totalScoreQuestions(array $answerQuestions){
        $totalScore = 0;
        foreach ($answerQuestions as $questionIndex => $answerQuestion) {
            $dataRaw = $answerQuestion['data_raw'] ?? [];
            $totalScore += $this->calculateScoreInQuestion($dataRaw);
        }
        return $totalScore;
    }

    /**
     * CalculateScoreInQuestion function
     *
     * @param [type] $data
     * @return int
     */
    private function calculateScoreInQuestion($data)
    {
        $totalScore = 0;
        if (!empty($data) && is_array($data)) {
            $score = $data['score'] ?? 0;
            $chose = $data['chose'] ?? 0;
            if ($score && !!$chose) {
                $totalScore += $score;
            }
            foreach ($data as $dataItem) {
                if (!empty($dataItem) && is_array($dataItem)) {
                    $totalScore += $this->calculateScoreInQuestion($dataItem);
                }
            }
        }
        return $totalScore;
    }
}