<?php

namespace Database\Seeders;

use App\Models\Product_Size;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product_Size::factory(5)->create(
            [  
            "product_id"=> 1,
            "size_id"=> 1]
            );
    }
}
