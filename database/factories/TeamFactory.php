<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Team::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $city = fake()->city;

        return [
            'name' =>fake()->unique()->company,
            'city' => $city,
            'country' =>fake()->country,
            'manager_name' =>fake()->name,
            'stadium_name' =>fake()->optional()->city . ' Stadium',
            'description' => fake()->paragraph()
        ];
    }
}
