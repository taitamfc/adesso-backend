<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Survey extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'respondent_id', 'order', 'intro_text', 'title', 'background'
    ];

    /**
     * Relation questions function
     *
     * @return HasMany
     */
    public function questions()
    {
        return $this->hasMany(Question::class, 'survey_id');
    }
}
