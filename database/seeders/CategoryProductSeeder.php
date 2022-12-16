<?php

namespace Database\Seeders;

use App\Models\Category_Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category_Product::factory(5)->create(
            [  
                "category_id"=> 1,
                "product_id"=> 1,
               ]
            );

        
    }
}
