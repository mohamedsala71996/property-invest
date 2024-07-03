<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooterElement extends Model
{
    use HasFactory;
    protected $fillable = ['title_one','title_one_ar','description','description_ar','logo','instgram_link',
    'facebook_link','twitter_link','linkdin_link','youtube_link','email_text_label','subscribe_btn_text',
    'page_one_name','page_one_name_ar','page_one_link','page_two_name','page_two_name_ar','page_two_link',
    'page_three_name','page_three_name_ar','page_three_link','page_four_name','page_four_name_ar','page_four_link',
    'page_five_name','page_five_name_ar','page_five_link','page_six_name','page_six_name_ar','page_six_link',
    'page_seven_name','page_seven_name_ar','page_seven_link','page_eight_name','page_eight_name_ar','page_eight_link',
    'page_nine_name','page_nine_name_ar','page_nine_link','page_ten_name','page_ten_name_ar','page_ten_link',
    'page_eleven_name','page_eleven_name_ar','page_eleven_link','page_tweleve_name','page_tweleve_name_ar','page_tweleve_link',
    'page_thrteen_name','page_thrteen_name_ar','page_thrteen_link','page_fourteen_name','page_fourteen_name_ar','page_fourteen_link',
    'page_fifteen_name','page_fifteen_name_ar','page_fifteen_link','page_sixteen_name','page_sixteen_name_ar',
    'page_sixteen_link','page_seventeen_name','page_seventeen_name_ar','page_seventeen_link',
    'page_eighteen_name','page_eighteen_name_ar','page_eighteen_link'];
}
