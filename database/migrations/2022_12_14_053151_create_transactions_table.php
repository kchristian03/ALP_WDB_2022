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
