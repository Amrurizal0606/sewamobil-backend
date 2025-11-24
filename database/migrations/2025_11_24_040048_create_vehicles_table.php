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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();

            $table->string('name'); //name product
            $table->string('slug'); //domain.com/details/name-product
            $table->string('thumbnail'); // image url product
            $table->text('about');

            //unsignedBigInteger untuk nilai positif besar
            $table->unsignedBigInteger('price');
            $table->unsignedBigInteger('duration');
            $table->unsignedBigInteger('horse_power');
            $table->unsignedBigInteger('cc');
            $table->unsignedBigInteger('max_speed');

            //boolean untuk nilai true/false  
            $table->boolean('is_popular');

            //foreignId untuk relasi ke tabel categories
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();

            //softDeletes untuk menghapus data sementara
            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
