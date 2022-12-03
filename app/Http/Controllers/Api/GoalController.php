<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Goal\MyGoalRequest;
use App\Http\Requests\Api\Goal\MyGoalWithDateRequest;
use App\Http\Resources\Goal\GoalResource;
use App\Http\Resources\Goal\MyGoalResource;
use App\Repositories\GoalRepository;
use App\Repositories\MyGoalRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class GoalController extends Controller
{
    protected $goalRepository;

    public function __construct(
        GoalRepository $goalRepository
    )
    {
        $this->goalRepository = $goalRepository;
    }

    public function index()
    {
        $goals = $this->goalRepository->getAll();
        return $this->responseSuccess( GoalResource::collection($goals));
    }

    public function getQuestionByGoal($id)
    {
        $goal = $this->goalRepository
            ->getModel()
            ->with(['questions'])
            ->findOrFail($id);
        return $this->responseSuccess(new GoalResource($goal));
    }
}
