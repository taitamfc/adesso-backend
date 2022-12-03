<?php

namespace Database\Seeders;

use App\Models\Goal;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class GoalSeeder extends Seeder
{
    protected $data = [
        [
            "name" => "NOURISH MY HEART",
            "description" => "Nourish yourself through healthy eating habits.",
        ],
        [
            "name" => "MOVE MY HEART",
            "description" => "Get moving to energize your heart.",
        ],
        [
            "name" => "REFRESH MY HEART",
            "description" => "Better manage stress to refresh yourself."
        ],
        [
            "name" => "COMMIT TO MY HEART",
            "description" => "Commit to a heart-healthy life."
        ],
        [
            "name" => "RELATE FOR MY HEART",
            "description" => "Relate with others in a healthier way.",
        ],
        [
            "name" => "KNOW MY NUMBERS",
            "description" => "Better understand and track your numbers."
        ],
        [
            "name" => "KNOW MY HEART"
        ],
        [
            "name" => "BALANCE MY HORMONES",
            "description" => "Take an active approach to managing your hormones."
        ],
        [
            "name" => "ADVOCATE FOR MY HEART",
            "description" => "Advocate for yourself and those you love"
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data as $item) {
            Goal::create([
                'name' => $item['name'],
            ]);
        }
    }
}
