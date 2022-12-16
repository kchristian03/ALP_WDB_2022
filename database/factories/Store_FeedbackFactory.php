<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Store_Feedback>
 */
class Store_FeedbackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "feedback_date"=>$this->faker->date('Y-m-d','now'),
            "feedback"=>$this->faker->text
        ];
    }
}
