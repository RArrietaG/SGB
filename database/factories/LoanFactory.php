<?php

namespace Database\Factories;

use App\Models\Applicant;
use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Loan>
 */
class LoanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $loanDate = $this->faker->dateTimeBetween('-30 days', 'now');
        $returnDate = $this->faker->dateTimeBetween($loanDate, '+30 days');

        return [
            'book_id'       => Book::factory()->create()->id,
            'applicant_id'  => Applicant::factory()->create()->id,
            'loan_date'     => $loanDate,
            'return_date'   => $returnDate,

        ];
    }
}
