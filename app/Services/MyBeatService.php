<?php

namespace App\Services;

use App\Enums\TypeAction;
use App\Models\Action;
use App\Models\User;
use App\Repositories\ActionRepository;
use App\Repositories\MyBeatRepository;
use App\Repositories\MyNowRepository;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MyBeatService {

    protected $myBeatRepository;

    public function __construct(
        MyBeatRepository $myBeatRepository
    )
    {
        $this->myBeatRepository = $myBeatRepository;
    }

    public function addScoreByActionAndUser(User $user, Action $action)
    {
        $myBeat = $user->myBeat;
        if (!$myBeat) {
            $myBeat = $user->myBeat()->create(['score' => $action->score]);
        }else {
            if (!$user->isCompleteAction($action)) {
                $myBeat->score += $action->score;
                $myBeat->save();
            }
        }
        return $myBeat;
    }
}