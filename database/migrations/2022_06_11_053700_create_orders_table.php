<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number')->nullable();
            $table->string('payment_method')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->string('total_amount')->nullable();
            $table->string('status')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('transaction_status')->nullable();
            $table->integer('is_seen')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('orders');
    }
}
