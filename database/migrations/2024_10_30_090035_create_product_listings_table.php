<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductListingsTable extends Migration
{
    public function up()
    {
        Schema::create('product_listings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key to Users table
            $table->string('name');              // Product name
            $table->text('description');        // Product description
            $table->decimal('price', 8, 2);     // Product price
            $table->integer('quantity');        // Product quantity
            $table->string('category');         // Category for the product (e.g., vegetables, tools)
            $table->enum('status', ['active', 'inactive'])->default('active'); // Product status
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_listings');
    }
}
