<?php

namespace App\Services;

use App\Repositories\ActionRepository;
use Exception;

class ActionService {

    protected $actionRepository;

    public function __construct(
        ActionRepository $actionRepository
    )
    {
        $this->actionRepository = $actionRepository;
    }

    public function getActionNotCompleteByUserId($userId)
    {
        return $this->actionRepository
            ->getModel()
            ->whereNotExists(function ($q) use ($userId) {
                $q->select('my_actions.id')
                    ->from('my_actions')
                    ->where('my_actions.user_id', $userId)
                    ->whereColumn('my_actions.action_id', 'actions.id');
            })
            ->get();
    }
}