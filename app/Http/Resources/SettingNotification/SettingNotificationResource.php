<?php

namespace App\Http\Resources\SettingNotification;

use Illuminate\Http\Resources\Json\JsonResource;

class SettingNotificationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'by_phone' => $this->by_phone,
            'type_notifi_by_phone' => $this->type_notifi_by_phone,
            'number_phone' => $this->number_phone,
            'by_email' => $this->by_email,
            'type_notifi_by_email' => $this->type_notifi_by_email,
            'email' => $this->email,
        ];
    }
}
