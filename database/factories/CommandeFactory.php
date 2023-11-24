<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Commande>
 */
class CommandeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_client' => $this->faker->randomElement(\App\Models\Client::pluck('id')),
            'id_produit' => $this->faker->randomElement(\App\Models\Produit::pluck('id')),
            'quantite' => $this->faker->randomNumber(5, false),
            'date' => $this->faker->date(),

        ];
    }
}
