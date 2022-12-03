<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerGoal extends Model
{
    use HasFactory;

    protected $table = 'answer_goals';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'my_goal_id', 'goal_id', 'user_id', 'score', 'status'
    ];

    public function myGoal()
    {
        return $this->hasOne(MyGoal::class);
    }

    public function answerQuestions()
    {
        return $this->hasMany(AnswerQuestion::class, 'answer_goal_id', 'id');
    }
}
