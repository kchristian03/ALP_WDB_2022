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
        Schema::create('transaction_details', function (Blueprint $table) {
            $table->id("transaction_details_id");
            $table->bigInteger("transaction_id")->unsigned();
            $table->double("price",8,2);
     
            $table->bigInteger("total_items");
            $table->bigInteger('total_harga');
            $table->bigInteger('product_size_id')->unsigned();
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
