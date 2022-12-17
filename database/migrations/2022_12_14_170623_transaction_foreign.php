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
        Schema::table('transactions', function (Blueprint $table) {
            $table->foreign("user_id")
            -> references("id")->on("users")
            -> onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign("adress_id")
            -> references("id")->on("adresses")
            -> onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign("payment_id")
            -> references("id")->on("payments")
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
        Schema::table('transactions', function (Blueprint $table) {
            //
        });
    }
};
