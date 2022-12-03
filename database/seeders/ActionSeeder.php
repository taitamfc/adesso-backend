<?php

namespace Database\Seeders;

use App\Models\Action;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ActionSeeder extends Seeder
{
    protected $data = [
        [
            'name' => 'Dashboard Introduction Animation',
            'score' => 5,
        ],
        [
            'name' => 'Heart Chart Introduction',
            'score' => 5,
        ],
        [
            'name' => 'Last Screen of introduction',
            'score' => 5,
        ],
        [
            'name' => 'Heart Score',
            'score' => 10,
        ],
        [
            'name' => 'My Now',
            'score' => 30,
        ],
        [
            'name' => 'Sessions Completed',
            'score' => 10,
        ],
        [
            'name' => 'Action',
            'score' => 25,
        ],
        [
            'name' => 'Go Deeper',
            'score' => 5,
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data as $key => $item) {
            Action::create([
                'name' => $item['name'],
                'score' => $item['score'],
                'key' => Str::slug($item['name'], '_'),
                'order' => $key + 1,
            ]);
        }
    }
}
