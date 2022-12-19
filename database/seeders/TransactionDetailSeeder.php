<?php

namespace Database\Seeders;

use App\Models\Transaction_Detail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Transaction_Detail::factory(5)->create(
            [  
            "transaction_id"=> 2,
            "product_id"=> 3,
    
            ]
            );

    }
}
