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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("user_id")->unsigned();
            $table->string("transaction_status")->default('unconfirmed');
            $table->bigInteger('adress_id')->unsigned();
            $table->string('no_resi');
            $table->double('total_price')->nullable();
            $table->string('bukti_pembayaran');
            $table->bigInteger('payment_id')->unsigned();
            $table->timestamps();
            
            $table->string("adress_name")->nullable();
            $table->string("postal_code")->nullable();
            $table->string("city")->nullable();
            $table->string("state")->nullable();
            $table->text("description")->nullable();
            $table->text("full_street_adress")->nullable();
           
         
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};
