<?php
namespace App\Repositories;

use App\Models\Action;

class ActionRepository extends AbstractRepository
{
    public function makeModel()
    {
        return Action::class;
    }

    public function findOrFailByKey($key)
    {
        return $this->getModel()
            ->where('key', $key)
            ->firstOrFail();
    }
}