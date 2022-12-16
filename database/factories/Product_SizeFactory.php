<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product_Size>
 */
class Product_SizeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
          
            "product_size_description"=>$this->faker->text,
            "product_size_price"=>$this->faker->randomNumber(2),
            "product_size_stock"=>$this->faker->randomNumber(2),
        ];
    }
}
