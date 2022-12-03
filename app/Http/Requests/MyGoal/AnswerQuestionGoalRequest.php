<?php

namespace App\Http\Requests\MyGoal;

use Illuminate\Foundation\Http\FormRequest;

class AnswerQuestionGoalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'answer_questions' => ['required', 'array'],
            'answer_questions.*.id' => ['required']
        ];
    }
}
