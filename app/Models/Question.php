<?php

namespace App\Models;

use App\Casts\Json;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    const SINGLE_CHOICE = 'single_choice';
    const MULTIPLE_CHOICE = 'multiple_choice';
    const FILL_BLANK = 'fill_blank';
    const TRUE_FALSE = 'true_false';
    const QUESTION_TABLE = 'question_table';
    const SLIDE = 'slide';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type', 'name', 'description', 'data_raw', 'dependency', 'score'
    ];

    protected $casts = [
        'data_raw' => Json::class,
        'dependency'  => Json::class,
    ];

    public function surveys()
    {
        return $this->hasOne(Survey::class);
    }

}
