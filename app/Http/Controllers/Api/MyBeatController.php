<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MyBeatResource;
use App\Http\Resources\Survey\SurveyDetailResource;
use App\Repositories\MyBeatRepository;
use Illuminate\Support\Facades\Auth;

class MyBeatController extends Controller
{
    protected $myBeatRepository;

    public function __construct(
        MyBeatRepository $myBeatRepository
    )
    {
        $this->myBeatRepository = $myBeatRepository;
    }

    /**
     * Detail function
     *
     * @param [type] $id
     * @return void
     */
    public function getMyBeat()
    {
        $mybeat = $this->myBeatRepository->getMyBeatByUserId(Auth::id());
        if (!$mybeat) {
            $mybeat = $this->myBeatRepository->create([
                'user_id' => Auth::id()
            ]);
        }
        return $this->responseSuccess( new MyBeatResource($mybeat), __('label.success'));
    }
}
