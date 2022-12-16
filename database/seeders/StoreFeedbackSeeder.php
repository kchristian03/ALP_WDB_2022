<?php

namespace Database\Seeders;

use App\Models\Store_Feedback;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoreFeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Store_Feedback::factory(5)->create(
            [  
            "user_id"=> '1'
            ]
            );
    }
}
