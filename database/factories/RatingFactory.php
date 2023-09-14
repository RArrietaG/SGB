<?php

namespace Database\Factories;

use App\Models\Applicant;
use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rating>
 */
class RatingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'book_id'       => Book::factory()->create()->id,
            'applicant_id'  => Applicant::factory()->create()->id,
            'rating'        => $this->faker->numberBetween(1,10),
            'comment'       =>$this->faker->sentence,

        ];
    }
}
