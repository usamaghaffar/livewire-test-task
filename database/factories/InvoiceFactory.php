<?php

namespace Database\Factories;

use App\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    protected $model = Invoice::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'invoice_number' => 'INV-' . $this->faker->unique()->randomNumber(5),
            'amount' => $this->faker->randomFloat(2, 50, 1000),
            'customer_email' => $this->faker->safeEmail(),
            'status' => $this->faker->randomElement(['Draft', 'Outstanding', 'Paid']),
            'created_date' => $this->faker->date(),
        ];
    }
}
