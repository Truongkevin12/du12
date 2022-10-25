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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('customer_id')->nullable()->index();
            $table->string('customer_name');
            $table->string('customer_address');
            $table->string('customer_phone');
            $table->string('customer_email')->nullable();
            $table->string('customer_notes')->nullable();

            $table->dateTime('order_date');
            $table->double('total_amount');
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
};
