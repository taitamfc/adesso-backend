<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'team_name' => $this->faker->name(),
        // 'client_id' => rand(1, 5), 
        'manager_id' => null,
        'parent_team_id' => null,
        ];
    }
}
