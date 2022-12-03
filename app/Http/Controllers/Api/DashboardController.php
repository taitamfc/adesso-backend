<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Action\ActionResource;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function __construct()
    {
    }

    public function show()
    {
        $user = Auth::user();
        $myBeatNumber = optional($user->myBeat)->score ?? 0;
        return $this->responseSuccess([
            'total_my_beat' => $myBeatNumber,
            'my_now' => $user->myNow
        ]);
    }

}
