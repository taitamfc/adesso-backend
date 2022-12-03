<?php

namespace App\Services;

use App\Enums\TypeAction;
use App\Models\Action;
use App\Models\User;
use App\Repositories\ActionRepository;
use App\Repositories\MyNowRepository;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MyNowService {

    protected $myNowRepository;
    protected $actionRepository;

    public function __construct(
        MyNowRepository $myNowRepository,
        ActionRepository $actionRepository
    )
    {
        $this->myNowRepository = $myNowRepository;
        $this->actionRepository = $actionRepository;
    }
    /**
     * RegisterUser function
     *
     * @param array $data
     * @return bool|Model
     */
    public function updateOrCreateByAuth(array $data)
    {
        $user = Auth::user();
        $mynow = $this->myNowRepository->updateOrCreate([
            'user_id' => $user->id
        ], [
            'content' => $data['content']
        ]);

        /**
         * Add beats score
         */
        if ($mynow) {
            $actionMyNow = $this->actionRepository->findBy(['key' => TypeAction::KEY_MY_NOW]);
            if ($actionMyNow && $user->myActions()->where('action_id', $actionMyNow->id)->doesntExist()) {
                $user->myActions()->create([
                    'action_id' => $actionMyNow->id,
                ]);
                // Add beat
                $myBeat = $user->myBeat;
                if (!$myBeat) {
                    $user->myBeat()->create(['score' => $actionMyNow->score]);
                } else {
                    $myBeat->score += $actionMyNow->score;
                    $myBeat->save();
                }
            }
        }
        return $mynow;
    }

}