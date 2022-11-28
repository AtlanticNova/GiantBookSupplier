<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BooksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'publisher_id' => $this->faker->numberBetween(1, 10),
            'title' => $this->faker->text(50),
            'author' => $this->faker->name(),
            'year' => $this->faker->year(),
            'synopsis' => $this->faker->text(255),
            'image' => $this->faker->imageUrl(1080, 1280,'book cover')
        ];
    }
}
