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
        Schema::create('member_ships', function (Blueprint $table) {
            $table->id();
            $table->string('title_one')->nullable();
            $table->string('title_one_ar')->nullable();
            $table->string('title_two')->nullable();
            $table->string('title_two_ar')->nullable();
            $table->string('paragraph_one')->nullable();
            $table->string('paragraph_one_ar')->nullable();
            $table->string('title_three')->nullable();
            $table->string('title_three_ar')->nullable();
            $table->string('title_four')->nullable();
            $table->string('title_four_ar')->nullable();
            $table->string('sp_title')->nullable();
            $table->string('sp_title_ar')->nullable();
            $table->string('sp_price')->nullable();
            $table->string('sp_description')->nullable();
            $table->string('sp_description_ar')->nullable();
            $table->string('bp_title')->nullable();
            $table->string('bp_title_ar')->nullable();
            $table->string('bp_price')->nullable();
            $table->string('bp_description')->nullable();
            $table->string('bp_description_ar')->nullable();
            $table->string('pp_title')->nullable();
            $table->string('pp_title_ar')->nullable();
            $table->string('pp_price')->nullable();
            $table->string('pp_description')->nullable();
            $table->string('pp_description_ar')->nullable();
            $table->string('btn_text')->nullable();
            $table->string('btn_text_ar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member_ships');
    }
};
