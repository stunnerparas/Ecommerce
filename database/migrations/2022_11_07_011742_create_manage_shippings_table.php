<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManageShippingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manage_shippings', function (Blueprint $table) {
            $table->id();
            $table->string('shipping_method')->nullable();
            $table->string('tracking_number')->nullable();
            $table->date('estimated_arrival_date')->nullable();
            $table->text('tracking_url')->nullable();
            $table->string('file')->nullable();
            $table->string('shipping_status')->nullable();
            $table->text('remarks')->nullable();
            $table->bigInteger('user_id')->nullable();
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
        Schema::dropIfExists('manage_shippings');
    }
}
