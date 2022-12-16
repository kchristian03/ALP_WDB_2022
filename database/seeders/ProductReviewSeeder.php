<?php

namespace Database\Seeders;

use App\Models\Product_Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product_Review::factory(5)->create(
            [  
            "product_id"=> '1',
            "user_id"=> '1']
            );
    }
}
