<?php

namespace App\Http\Resources\Survey;

use Illuminate\Http\Resources\Json\JsonResource;

class SurveyResource extends JsonResource
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
            'respondent_id' => $this->respondent_id,
            'order' => $this->order,
            'intro_text' => $this->intro_text,
            'title' => $this->title,
            'background' => $this->background,
        ];
    }
}
