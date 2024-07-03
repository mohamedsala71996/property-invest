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
        Schema::create('footer_elements', function (Blueprint $table) {
            $table->id();
            $table->string('title_one')->nullable();
            $table->string('title_one_ar')->nullable();
            $table->string('description')->nullable();
            $table->string('description_ar')->nullable();
            $table->string('logo')->nullable();
            $table->string('instgram_link')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('linkdin_link')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('email_text_label')->nullable();
            $table->string('subscribe_btn_text')->nullable();
            $table->string('page_one_name')->nullable();
            $table->string('page_one_name_ar')->nullable();
            $table->string('page_one_link')->nullable();
            $table->string('page_two_name')->nullable();
            $table->string('page_two_name_ar')->nullable();
            $table->string('page_two_link')->nullable();
            $table->string('page_three_name')->nullable();
            $table->string('page_three_name_ar')->nullable();
            $table->string('page_three_link')->nullable();
            $table->string('page_four_name')->nullable();
            $table->string('page_four_name_ar')->nullable();
            $table->string('page_four_link')->nullable();
            $table->string('page_five_name')->nullable();
            $table->string('page_five_name_ar')->nullable();
            $table->string('page_five_link')->nullable();
            $table->string('page_six_name')->nullable();
            $table->string('page_six_name_ar')->nullable();
            $table->string('page_six_link')->nullable();
            $table->string('page_seven_name')->nullable();
            $table->string('page_seven_name_ar')->nullable();
            $table->string('page_seven_link')->nullable();
            $table->string('page_eight_name')->nullable();
            $table->string('page_eight_name_ar')->nullable();
            $table->string('page_eight_link')->nullable();
            $table->string('page_nine_name')->nullable();
            $table->string('page_nine_name_ar')->nullable();
            $table->string('page_nine_link')->nullable();
            $table->string('page_ten_name')->nullable();
            $table->string('page_ten_name_ar')->nullable();
            $table->string('page_ten_link')->nullable();
            $table->string('page_eleven_name')->nullable();
            $table->string('page_eleven_name_ar')->nullable();
            $table->string('page_eleven_link')->nullable();
            $table->string('page_tweleve_name')->nullable();
            $table->string('page_tweleve_name_ar')->nullable();
            $table->string('page_tweleve_link')->nullable();
            $table->string('page_thrteen_name')->nullable();
            $table->string('page_thrteen_name_ar')->nullable();
            $table->string('page_thrteen_link')->nullable();
            $table->string('page_fourteen_name')->nullable();
            $table->string('page_fourteen_name_ar')->nullable();
            $table->string('page_fourteen_link')->nullable();
            $table->string('page_fifteen_name')->nullable();
            $table->string('page_fifteen_name_ar')->nullable();
            $table->string('page_fifteen_link')->nullable();
            $table->string('page_sixteen_name')->nullable();
            $table->string('page_sixteen_name_ar')->nullable();
            $table->string('page_sixteen_link')->nullable();
            $table->string('page_seventeen_name')->nullable();
            $table->string('page_seventeen_name_ar')->nullable();
            $table->string('page_seventeen_link')->nullable();
            $table->string('page_eighteen_name')->nullable();
            $table->string('page_eighteen_name_ar')->nullable();
            $table->string('page_eighteen_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footer_elements');
    }
};
