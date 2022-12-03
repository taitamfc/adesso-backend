<?php

namespace App\Services;

use App\Models\Action;
use App\Repositories\MyActionRepository;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MyActionService {

    protected $myActionRepository;
    protected $myBeatService;

    public function __construct(
        MyActionRepository $myActionRepository,
        MyBeatService $myBeatService
    )
    {
        $this->myActionRepository = $myActionRepository;
        $this->myBeatService = $myBeatService;
    }

    public function actionIsCompleteByAuth(Action $action)
    {
        return $this->myActionRepository
            ->getModel()
            ->where('user_id', Auth::id())
            ->where('action_id', $action->id)
            ->exists();
    }

    public function addActionToCompleteByAuth(Action $action)
    {
        try {
            DB::beginTransaction();
            $myAction =  $this->myActionRepository
                ->getModel()
                ->create([
                    'user_id' => Auth::id(),
                    'action_id' => $action->id
                ]);
            /**
             * add my beat
             */
            $this->myBeatService->addScoreByActionAndUser(Auth::user(), $action);
            DB::commit();
            return $myAction;
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}