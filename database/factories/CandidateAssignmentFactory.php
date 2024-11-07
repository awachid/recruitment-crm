<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CandidateAssignmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'assigned_at' => $this->faker->dateTimeThisYear(),
            'end_date' => $this->faker->optional(0.3)->dateTimeThisYear(),
            'is_active' => $this->faker->boolean(70),
        ];
    }
}
