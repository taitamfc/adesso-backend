<?php

namespace App\Models;

use App\Casts\Json;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerQuestion extends Model
{
    use HasFactory;
    
    protected $table = 'answer_questions';

    protected $casts = [
        'data_raw' => Json::class,
        'dependency'  => Json::class,
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'question_id',
        'answer_survey_id', 'answer_goal_id', 'survey_id', 'goal_id',
        'type', 'name', 'description', 'data_raw',
        'dependency', 'score'
    ];
}
