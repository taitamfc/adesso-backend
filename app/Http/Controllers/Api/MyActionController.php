<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompleteActionByKeyRequest;
use App\Http\Resources\Action\ActionResource;
use App\Repositories\ActionRepository;
use App\Services\ActionService;
use App\Services\MyActionService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class MyActionController extends Controller
{
    protected $actionService;
    protected $myActionService;
    protected $actionRepository;

    public function __construct(
        ActionService $actionService,
        MyActionService $myActionService,
        ActionRepository $actionRepository
    )
    {
        $this->actionService = $actionService;
        $this->myActionService = $myActionService;
        $this->actionRepository = $actionRepository;
    }

    public function complete()
    {
        $actions = Auth::user()->actions;
        return $this->responseSuccess(ActionResource::collection($actions));
    }

    public function notComplete()
    {
        $actions = $this->actionService->getActionNotCompleteByUserId(Auth::id());
        return $this->responseSuccess(ActionResource::collection($actions));
    }

    public function completeActionByKey(CompleteActionByKeyRequest $request)
    {
        $action = $this->actionRepository->findOrFailByKey($request['key']);

        if ($this->myActionService->actionIsCompleteByAuth($action)) {
            return $this->responseError(null, __("Action is complete before!"));
        }
        $result = $this->myActionService->addActionToCompleteByAuth($action);
        return $this->responseSuccess($result);
    }

}
