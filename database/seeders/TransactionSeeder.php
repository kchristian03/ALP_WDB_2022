<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Transaction::factory(5)->create(
            [  
            "user_id"=> 1,
            "payment_id"=> 1,
            "adress_id"=> 1,
            ]
            );
  
    }
}
