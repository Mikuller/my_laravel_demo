<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake() -> sentence(),
            'tags' => "Laravel , api , BackEnd",
            'company' => fake() -> company(),
            'website' => fake() -> url(),
            'location' => fake() -> city(),
            'email' => fake() ->email(),
            'description' => fake() -> paragraph(5)

        ];
    }
}
