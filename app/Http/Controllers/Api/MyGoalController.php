<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Goal\MyGoalRequest;
use App\Http\Requests\Api\Goal\MyGoalWithDateRequest;
use App\Http\Requests\MyGoal\AnswerQuestionGoalRequest;
use App\Http\Resources\Goal\GoalResource;
use App\Http\Resources\Goal\MyGoalResource;
use App\Repositories\GoalRepository;
use App\Repositories\MyGoalRepository;
use App\Services\MyGoalService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class MyGoalController extends Controller
{
    protected $myGoalRepository;
    protected $goalRepository;
    protected $myGoalService;

    public function __construct(
        MyGoalRepository $myGoalRepository,
        GoalRepository $goalRepository,
        MyGoalService $myGoalService
    )
    {
        $this->myGoalRepository = $myGoalRepository;
        $this->goalRepository = $goalRepository;
        $this->myGoalService = $myGoalService;
    }

    public function getMyHeartToday()
    {
        $goals = $this->goalRepository->getMyHeartTodayByUserId(Auth::id());
        return $this->responseSuccess( GoalResource::collection($goals));
    }

    public function myGoalWithDate(MyGoalWithDateRequest $request)
    {
        $goals = $this->goalRepository->myGoalWithDate(Auth::id(), $request->validated());
        return $this->responseSuccess( GoalResource::collection($goals));
    }

    public function createMygoal(MyGoalRequest $request)
    {   
        if ($this->myGoalRepository->checkMyGoalAddByAuth($request->validated())) {
            return $this->responseError(null, __('goal_id, add_date has created before!'));
        }
        $myGoal = $this->myGoalRepository->createMygoalByUserId(Auth::id(), $request->validated());
        $myGoal->load('goal');
        return $this->responseSuccess( new MyGoalResource($myGoal));
    }

    public function removeMyGoal(MyGoalRequest $request)
    {   
        $result = $this->myGoalRepository->removeMyGoalByAuth($request->validated());
        return $this->responseSuccess($result);
    }

    public function myGoalsInMonth()
    {
        $myGoals = $this->myGoalRepository->getMyGoalsInMonthByUserId(Auth::id());
        return $this->responseSuccess($this->detectDataMyGoalInMonth($myGoals));
    }

    private function detectDataMyGoalInMonth($myGoals)
    {
        $result = [];
        $firstMonth = Carbon::now()->firstOfMonth();
        $endOfMont = Carbon::now()->endOfMonth();
        for ($date = $firstMonth; $date <= $endOfMont ; $date->modify('+1 day')) {
            $result[$date->toDateString()]  = $myGoals->filter(function ($myGoal) use ($date) {
                return $myGoal->add_date == $date->toDateString();
            });
        }
        return $result;
    }

    public function myGoalsWithQuestionWithDate(MyGoalWithDateRequest $request)
    {
        $goals = $this->goalRepository->myGoalWithDate(Auth::id(), $request->validated(), ['questions']);
        return $this->responseSuccess( GoalResource::collection($goals));
    }

    public function answerQuestions($myGoalId, AnswerQuestionGoalRequest $request)
    {
        $myGoal = $this->myGoalRepository->findOrFail($myGoalId);
        $answerQuestions = $request->get('answer_questions');
        $result = $this->myGoalService->answerQuestions($myGoal, $answerQuestions);
        return $this->responseSuccess($result, __('label.success'));
    }

}
