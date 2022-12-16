<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction_Detail>
 */
class Transaction_DetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
          
            "price"=>$this->faker->randomNumber(2),
            "total_items"=> $this->faker->randomNumber(2),
            "total_harga"=> $this->faker->randomNumber(2),

      
        ];
    }
}
