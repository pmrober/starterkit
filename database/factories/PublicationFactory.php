<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Publication>
 */
class PublicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(31, 41),
            'token' => $this->faker->uuid(),
            'title' => $this->faker->text(100),
            'description' => $this->faker->text(500),
            'identity' => $this->faker->randomElement(array('public', 'hidden')),
            'type' => $this->faker->randomElement(array('offer', 'demand', 'diffusion')),
            'section_id' => $this->faker->numberBetween(1, 9),
            'category_id' => $this->faker->numberBetween(1, 13),
            'sail_type' => $this->faker->randomElement(array('multi-sale', 'exclusive')),
            'exact_price' => $this->faker->numberBetween(150, 9000),
            'min_price' => $this->faker->numberBetween(150, 9000),
            'max_price' => $this->faker->numberBetween(150, 9000),
            'check_price' => $this->faker->numberBetween(0, 1),
            'currency' => $this->faker->randomElement(array('EUR', 'USD')),
            'event_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'event_country' => $this->faker->numberBetween(1, 10),
            'event_city' => $this->faker->numberBetween(1, 10),
            'event_population' => $this->faker->city,
            'views' => $this->faker->numberBetween(1, 5000),
            'likes' => $this->faker->numberBetween(1, 5000),
            'state_id' => $this->faker->randomElement(array(1, 2, 3)),
            'preview_url' => $this->faker->uuid() . 'jpg' ,
            'created_at' => $this->faker->dateTimeThisYear('now')
        ];
    }
}
