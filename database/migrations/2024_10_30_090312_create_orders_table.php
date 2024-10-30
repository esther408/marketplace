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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignid('buyer_id')->constrained('buyers','id');
            $table->foreignid('product_id')->constrained('product_listings','id');
            $table->string('quantity',45);
            $table->string('status',45);
            $table->string('unit_price',45);
            $table->string('total',45);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
