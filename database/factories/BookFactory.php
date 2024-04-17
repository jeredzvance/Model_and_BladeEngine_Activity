<?php

namespace Database\Factories;

use App\Models\Book;
use Faker\Generator as Faken;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(Faker $faker)
    {
        return [
            'isbn' => $faker->isbn13,
            'title' => $faker->sentence(words: 3),
            'author' => $faker->name,
            'description' => $faker->paragraph(sentence: 2),
            'date_published' => $faker->date('Y-m-d', '-10 years'),
        ];
    }
}
