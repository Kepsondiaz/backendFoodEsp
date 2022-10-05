<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menus>
 */
class MenusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nomMenus' => fake()->name(),
            'prixMenus' => fake()->randomDigit(), 
            'composantsMenus' => fake()->name()
        ];
    }
}
