<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeartScore extends Model
{
    use HasFactory;
    
    protected $table = 'heart_scores';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'score'
    ];

    public function answerSurveys()
    {
        return $this->hasMany(AnswerSurvey::class);
    }
}
