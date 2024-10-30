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
        Schema::create('blog_informations', function (Blueprint $table) {
            $table->id();
            $table->foreignid('user_id')->constrained('users','id');
            $table->foreignid('blog_id')->constrained('blogs','id');
            $table->string('liked',45);
            $table->string('saved',45);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_informations');
    }
};
