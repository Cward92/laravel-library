<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'excerpt' => $this->faker->sentence,
            'isbn' => $this->faker->numberBetween($min = 123456, $max = 999999),
            'pages' => $this->faker->numberBetween($min = 50, $max = 999),
            'value' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0.00, $max = 200.00),
            'cost' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0.00, $max = 200.00),
            'released' => $this->faker->dateTimeThisCentury
        ];
    }
}
