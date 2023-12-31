<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->integerIncrements('OrderDetailID');
            $table->unsignedInteger('OrderID');
            $table->foreign('OrderID')->references('OrderID')->on('orders');
            $table->unsignedInteger('ProductID');
            $table->foreign('ProductID')->references('ProductID')->on('products');
            $table->integer('Quantity');
            $table->integer('Subtotal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orderderdetail');
    }
};
