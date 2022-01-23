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
            $table->unsignedInteger('order_id');
            $table->foreignId('user_id')->nullable();
            $table->foreignId('product_id')->nullable();
            $table->foreignId('invoice_id')->nullable();
            $table->double('amount', 15, 8);
            $table->string('payment_method');
            $table->boolean('invoice_generated')->default(false)->nullable();
            $table->string('status');
            $table->timestamps();
            $table->softDeletes();

            $table->index('user_id');
            $table->index('product_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('orders');
        Schema::disableForeignKeyConstraints();
    }
}
