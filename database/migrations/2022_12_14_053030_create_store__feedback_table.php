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
        Schema::create('store__feedback', function (Blueprint $table) {
            $table->id("feedback_id");
            $table->bigInteger('user_id');
            $table->timestamps("feedback_date");
            $table->enum('feedback_status', ['seen', 'unseen'])->default('unseen');
            $table->string('feedback');
     

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store__feedback');
    }
};
