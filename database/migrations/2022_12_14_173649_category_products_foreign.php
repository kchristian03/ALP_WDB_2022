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
        Schema::table('category_products', function (Blueprint $table) {
            $table->foreign("product_id")
            -> references("product_id")->on("products")
            -> onDelete('cascade')
            ->onUpdate('cascade');


            $table->foreign("category_id")
            -> references("category_id")->on("categories")
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
        Schema::table('category_products', function (Blueprint $table) {
            //
        });
    }
};
