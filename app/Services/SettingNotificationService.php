<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\SettingNofificationRepository;
use Exception;

class SettingNotificationService {

    protected $settingNofificationRepository;

    public function __construct(
        SettingNofificationRepository $settingNofificationRepository
    )
    {
        $this->settingNofificationRepository = $settingNofificationRepository;
    }
    /**
     * UpdateOrCreateByUserId function
     *
     * @param array $data
     * @return bool|User
     */
    public function updateOrCreateByUserId(array $data, int $userId)
    {
        return $this->settingNofificationRepository->updateOrCreate([
            'user_id' => $userId
        ], [
            "by_phone" =>  $data['by_phone'] ?? false,
            "type_notifi_by_phone" =>  $data['type_notifi_by_phone'] ?? "",
            "number_phone" =>  $data['number_phone'] ?? "",
            "by_email" =>  $data['by_email'] ?? false,
            "type_notifi_by_email" =>  $data['type_notifi_by_email'] ?? "",
            "email" =>  $data['email'] ?? ""
        ]);
    }

}