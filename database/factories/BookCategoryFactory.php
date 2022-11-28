<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'book_id' => ($this->faker->randomNumber(1) % 50 + 1),
            'category_id' => ($this->faker->randomNumber(1) % 5 + 1)
        ];
    }
}
