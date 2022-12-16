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
        Schema::table('product__reviews', function (Blueprint $table) {
            $table->foreign("user_id")
            -> references("user_id")->on("users")
            -> onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign("product_id")
            -> references("product_id")->on("products")
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
        Schema::table('product_reviews', function (Blueprint $table) {
            //
        });
    }
};
