<?php

namespace App\Http\Resources\Goal;

use Illuminate\Http\Resources\Json\JsonResource;

class MyGoalInMonthResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return $this->detectData();
    }

    private function detectData()
    {
        
    }
}
