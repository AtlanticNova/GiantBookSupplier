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
            'publisher_id' => $this->faker->numberBetween(1, 3),
            'title' => $this->faker->text(15),
            'author' => $this->faker->name(),
            'year' => $this->faker->year(),
            'synopsis' => $this->faker->text(),
            'image' => $this->faker->imageUrl(1080, 1920,'book cover')
        ];
    }
}
