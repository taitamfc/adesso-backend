<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Survey\AnswerQuestionSurveyRequest;
use App\Http\Resources\Survey\SurveyDetailResource;
use App\Http\Resources\Survey\SurveyResource;
use App\Repositories\SurveyRepository;
use App\Services\SurveyService;

class SurveyController extends Controller
{
    protected $surveyRepository;
    protected $surveyService;

    public function __construct(
        SurveyRepository $surveyRepository,
        SurveyService $surveyService
    )
    {
        $this->surveyRepository = $surveyRepository;
        $this->surveyService = $surveyService;
    }

    /**
     * Index function
     *
     * @return void
     */
    public function index()
    {
        $surveys = $this->surveyRepository->getAll();
        return $this->responseSuccess(SurveyResource::collection($surveys), __('label.success'));
    }

    /**
     * Detail function
     *
     * @param [type] $id
     * @return void
     */
    public function detail($id)
    {
        $survey = $this->surveyService->getDetail($id);
        return $this->responseSuccess( new SurveyDetailResource($survey), __('label.success'));
    }

    public function answerQuestions($surveyId, AnswerQuestionSurveyRequest $request)
    {
        $survey = $this->surveyRepository->findOrFail($surveyId);
        $answerQuestions = $request->get('answer_questions');
        $result = $this->surveyService->answerQuestions($survey, $answerQuestions);
        return $this->responseSuccess($result, __('label.success'));
    }
}
