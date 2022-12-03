<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyBeat extends Model
{
    use HasFactory;

    protected $table = 'my_beats';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'score',
    ];


    public function MyBeatHistories()
    {
        return $this->hasMany(MyBeatHistory::class);
    }
}
