<?php
namespace App\Repositories;

use App\Models\Action;
use App\Models\MyAction;

class MyActionRepository extends AbstractRepository
{
    public function makeModel()
    {
        return MyAction::class;
    }
}