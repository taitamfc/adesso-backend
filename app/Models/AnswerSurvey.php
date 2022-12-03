<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerSurvey extends Model
{
    use HasFactory;

    protected $table = 'answer_surveys';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'heart_score_id', 'survey_id', 'user_id',
        'score', 'status'
    ];

    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }

    public function answerQuestions()
    {
        return $this->hasMany(AnswerQuestion::class, 'answer_survey_id', 'id');
    }
}
