<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Player>
 */
class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $positions = ['Forward', 'Midfielder', 'Defender', 'Goalkeeper'];

        $team_id = Team::inRandomOrder()->first();

        $countries = [
            'Brazil', 'Argentina', 'France', 'England', 'Germany',
            'Spain', 'Portugal', 'Netherlands', 'Italy', 'USA',
            'Mexico', 'Japan', 'South Korea', 'Senegal', 'Nigeria'
        ];

        return [

            'team_id'=> $team_id,

            'first_name' => fake()->firstName(),

            'last_name' => fake()->lastName(),


            'country' => fake()->randomElement($countries),


            'position' => fake()->randomElement($positions),

        ];

    }
}
