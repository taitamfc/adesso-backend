<?php
namespace App\Repositories;

use App\Models\AnswerQuestion;

class AnswerQuestionRepository extends AbstractRepository
{
    public function makeModel()
    {
        return AnswerQuestion::class;
    }
}