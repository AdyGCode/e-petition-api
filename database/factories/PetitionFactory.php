<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Petition>
 */
class PetitionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'category' =>$this->faker->words(3,true),
            'description' =>$this->faker->text(200),
            'author' =>$this->faker->name,
            'user_id' => $this->faker->numberBetween(1_000, 1_030),
            'signees' => $this->faker->numberBetween(0, 20_000_000),
        ];
    }
}
