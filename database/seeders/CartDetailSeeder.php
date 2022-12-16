<?php

namespace Database\Seeders;

use App\Models\Cart_detail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Cart_detail::factory(5)->create(
            [  
            "cart_id"=> '1',
            "product_size_id"=> '1']
            );
      
    }
}
