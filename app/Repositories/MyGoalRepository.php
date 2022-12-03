<?php
namespace App\Repositories;

use App\Models\MyGoal;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class MyGoalRepository extends AbstractRepository
{
    public function makeModel()
    {
        return MyGoal::class;
    }

    public function checkMyGoalAddByAuth(array $data)
    {
        return $this->getModel()
            ->where([
                'user_id' => Auth::id(),
                'add_date' => $data['add_date'],
                'goal_id' => $data['goal_id']
            ])
            ->exists();
    }

    public function removeMyGoalByAuth(array $data)
    {
        return $this->getModel()
            ->where([
                'user_id' => Auth::id(),
                'add_date' => $data['add_date'],
                'goal_id' => $data['goal_id']
            ])
            ->delete();
    }

    public function createMygoalByUserId($userId, $data)
    {
        return $this->create([
            'user_id' => $userId,
            'add_date' => $data['add_date'],
            'goal_id' => $data['goal_id']
        ]);
    }

    public function getMyGoalsInMonthByUserId($userId)
    {
        return $this->model
            ->where('my_goals.user_id', $userId)
            ->join('goals', 'goals.id', '=', 'my_goals.goal_id')
            ->whereBetween('my_goals.add_date', [
                Carbon::now()->startOfMonth(),
                Carbon::now()->endOfMonth()
            ])
            ->select(['my_goals.*'])
            ->addSelect(['goals.name', 'goals.description'])
            ->get();
    }

}