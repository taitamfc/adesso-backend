<?php

namespace App\Services;

use App\Repositories\ActionRepository;
use App\Repositories\AnswerQuestionRepository;
use Exception;

class AnswerQuestionService {

    protected $answerQuestionRepository;

    public function __construct(
        AnswerQuestionRepository $answerQuestionRepository
    )
    {
        $this->answerQuestionRepository = $answerQuestionRepository;
    }
}