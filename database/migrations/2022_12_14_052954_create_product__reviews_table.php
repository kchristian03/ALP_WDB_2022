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
        Schema::create('product__reviews', function (Blueprint $table) {
            $table->id("productreview_id");
      
            $table->bigInteger("user_id");
            $table->bigInteger("product_id");
            $table->bigInteger('rating');
            $table->string('review');
            $table->enum('status', ['hidden', 'shown'])->default('shown');
            $table->timestamps();

       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product__reviews');
    }
};
