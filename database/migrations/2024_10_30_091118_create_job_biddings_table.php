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
        Schema::create('job_biddings', function (Blueprint $table) {
            $table->id();
            $table->foreignid('job_id')->constrained('jobs','id');
            $table->foreignid('driver_id')->constrained('drivers','id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_biddings');
    }
};
