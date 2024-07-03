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
        Schema::create('post_advertises', function (Blueprint $table) {
            $table->id();
            $table->integer('duration');
            $table->decimal('duration_price', 10, 2);
            $table->string('rent_sell');
            $table->decimal('price', 10, 2);
            $table->string('cash_installment');
            $table->decimal('advance_payment', 10, 2)->nullable();
            $table->decimal('remaining_amount', 10, 2)->nullable();
            $table->integer('installment_duration')->nullable();
            $table->decimal('total_amount', 10, 2);
            $table->integer('property_type');
            $table->decimal('property_size', 10, 2);
            $table->string('location');
            $table->integer('bedrooms_no');
            $table->integer('Bathrooms_no');
            $table->integer('floors_no');
            $table->string('Construction_year');
            $table->string('th_d_image_path');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->decimal('latitude', 10, 7);
            $table->decimal('longitude', 10, 7);
            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_advertises');
    }
};
