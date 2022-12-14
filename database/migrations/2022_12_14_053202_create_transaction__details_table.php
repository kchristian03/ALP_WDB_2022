<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction__details', function (Blueprint $table) {
            $table->id("transaction_details_id");
            $table->int("transaction_id");
            $table->double("price");
            $table->int("total_items");
            $table->int('total_harga');
            $table->int('product_size_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction__details');
    }
};
