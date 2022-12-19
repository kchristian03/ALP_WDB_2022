<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "no_resi"=>$this->faker->postcode,
            "bukti_pembayaran"=>"gambarpembayaran.jpg",
            "total_price"=>0,
        ];
    }
}
