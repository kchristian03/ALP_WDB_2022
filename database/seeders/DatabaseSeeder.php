<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Member::factory(100)->create();
        $this->call([
            UserSeeder::class,  
            ProductSeeder::class,
            AdressSeeder::class,  
            PaymentSeeder::class,
            SizeSeeder::class,
            CategorySeeder::class,
       
           CategoryProductSeeder::class,

           
           ProductReviewSeeder::class,
         
           ProductSizeSeeder::class,
           
          CartSeeder::class,
           CartDetailSeeder::class,
          
           StoreFeedbackSeeder::class,
           TransactionSeeder::class,
           TransactionDetailSeeder::class,         
             
          
        ]);
    }
}
