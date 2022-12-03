<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\SettingNotification\SettingNotificationRequest;
use App\Http\Resources\SettingNotification\SettingNotificationResource;
use App\Repositories\SettingNofificationRepository;
use App\Services\SettingNotificationService;
use Illuminate\Support\Facades\Auth;

class SettingNotificationController extends Controller
{
    protected $settingNofificationRepository;
    protected $settingNotificationService;

    public function __construct(
        SettingNofificationRepository $settingNofificationRepository,
        SettingNotificationService $settingNotificationService
    )
    {
        $this->settingNofificationRepository = $settingNofificationRepository;
        $this->settingNotificationService = $settingNotificationService;
    }

    /**
     * Store function
     *
     * @param SettingNotificationRequest $request
     * @return void
     */
    public function store(SettingNotificationRequest $request)
    {
        $setting = $this->settingNotificationService->updateOrCreateByUserId($request->validated(), Auth::id());

        if (!$setting) {
            return $this->responseError($setting, __('label.faild'));
        }

        return $this->responseSuccess(new SettingNotificationResource($setting), __('label.success'));
    }
}
