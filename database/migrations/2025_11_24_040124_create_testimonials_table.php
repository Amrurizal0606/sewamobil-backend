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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();

            $table->string('name'); //name product
            $table->string('photo'); // image url product
            $table->string('occupation'); //name product

            $table->text('message'); // testimonial message
            $table->foreignId('vehicle_id')->constrained()->cascadeOnDelete(); //foreignId untuk relasi ke tabel vehicles
            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
