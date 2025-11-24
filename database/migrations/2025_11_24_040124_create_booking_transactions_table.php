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
        Schema::create('booking_transactions', function (Blueprint $table) {
            $table->id();

            $table->string('name'); //name product
            $table->string('phone'); //phone number
            $table->string('email'); //email user
            $table->string('proof'); // proof of payment url
            $table->string('booking_trx_id'); // booking transaction id
            $table->string('started_at'); // booking start date


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_transactions');
    }
};
