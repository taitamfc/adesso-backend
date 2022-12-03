<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\CreateMyNowRequest;
use App\Http\Resources\MyNow\MyNowResource;
use App\Repositories\MyNowRepository;
use App\Services\MyNowService;
use Illuminate\Support\Facades\Auth;

class MyNowController extends Controller
{
    protected $myNowRepository;
    protected $myNowService;

    public function __construct(
        MyNowRepository $myNowRepository,
        MyNowService $myNowService
    )
    {
        $this->myNowRepository = $myNowRepository;
        $this->myNowService = $myNowService;
    }

    /**
     * updateOrCreate function
     *
     * @param CreateMyNowRequest $request
     * @return void
     */
    public function updateOrCreate(CreateMyNowRequest $request)
    {
        $userId = Auth::id();
        $myNow = $this->myNowService->updateOrCreateByAuth($request->validated());
        if (!$myNow) {
            return $this->responseError($myNow, __('label.faild'));
        }
        return $this->responseSuccess(new MyNowResource($myNow), __('label.success'));
    }

    /**
     * getMyNow function
     *
     * @param CreateMyNowRequest $request
     * @return void
     */
    public function getMyNow()
    {
        $myNow = Auth::user()->myNow;
        if (!$myNow) {
            return $this->responseSuccess($myNow, __('Mynow not setting'));
        }
        return $this->responseSuccess(new MyNowResource($myNow), __('label.success'));
    }

}
