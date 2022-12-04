<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journey extends Model
{
    use HasFactory;
    public function journey_articles(){
        return $this->hasMany(JourneyArticle::class);
    }
}
