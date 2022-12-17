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
        Schema::table('transaction__details', function (Blueprint $table) {
             $table->foreign("transaction_id")
            -> references("id")->on("transactions")
            -> onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign("product_size_id")
            -> references("id")->on("product__sizes")
            -> onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transaction_details', function (Blueprint $table) {
            //
        });
    }
};
