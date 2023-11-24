<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produit>
 */
class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'nom' => $this->faker->lastName,
            'description' => $this->faker->word(),
            'lien_image' => $this->faker->imageUrl(),
            'prix' => $this->faker->randomFloat(1, 5, 1200),
            'tva' => $this->faker->randomFloat(1, 5, 1200),


        ];
    }
}
