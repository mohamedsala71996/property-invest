<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSetting extends Model
{  
    use HasFactory;
    protected $fillable = ['title_one','title_one_ar','title_two','title_two_ar','paragraph_one','paragraph_one_ar',
    'btn_one_txt','btn_one_txt_ar','title_three','title_three_ar','sub_title_no_one','sub_title_no_one_ar',
    'title_four','title_four_ar','sub_title_one','sub_title_one_ar','sub_title_two','sub_title_two_ar',
    'sub_title_three','sub_title_three_ar','sub_title_four','sub_title_four_ar','sub_title_five','sub_title_five_ar',
    'sub_title_six','sub_title_six_ar','paragraph_two','paragraph_two_ar','sub_title_no_two','sub_title_no_two_ar',
    'location','location_ar','rent','rent_ar','property_type','property_type_ar','beds','beds_ar','baths',
    'baths_ar','price','price_ar','more_filters','more_filters_ar','find','find_ar','featured_properties',
    'featured_properties_ar','title_five','title_five_ar','contact','contact_ar','btn_th_d_view','btn_th_d_view_ar',
    'see_more','see_more_ar','why_choose','why_choose_ar','title_six','title_six_ar','sub_title_seven','sub_title_seven_ar',
    'title_seven','title_seven_ar','paragraph_three','paragraph_three_ar','title_eight','title_eight_ar',
    'paragraph_four','paragraph_four_ar','paragraph_five','paragraph_five_ar','title_nine','title_nine_ar',
    'paragraph_six','paragraph_six_ar','title_ten','title_ten_ar','paragraph_seven','paragraph_seven_ar',
     'title_eleven','title_eleven_ar','paragraph_eight','paragraph_eight_ar','about_us_txt','about_us_txt_ar',
     'sub_title_seven','sub_title_seven_ar','paragraph_nine','paragraph_nine_ar','paragraph_ten','paragraph_ten_ar',
     'services_title','services_title_ar','title_tweleve','title_tweleve_ar','title_thirteen','title_thirteen_ar',
    'paragraph_eleven','paragraph_eleven_ar','title_fourteen','title_fourteen_ar','paragraph_tweleve',
    'paragraph_tweleve_ar','title_fifteen','title_fifteen_ar','paragraph_thirteen','paragraph_thirteen_ar',
    'title_sixteen','title_sixteen_ar','paragraph_fourteen','paragraph_fourteen_ar','title_seventeen',
    'title_seventeen_ar','paragraph_fifteen','paragraph_fifteen_ar','title_eighteen','title_eighteen_ar',
    'paragraph_sixteen','paragraph_sixteen_ar','sqm_u','sqm_u_ar','title_nineteen','title_nineteen_ar',
   'value_one','title_twenty','title_twenty_ar','value_two','title_twenty_one','title_twenty_one_ar',
   'value_three','title_twenty_two','title_twenty_two_ar','value_four','title_twenty_three','title_twenty_three_ar',
   'title_twenty_four','title_twenty_four_ar','image_one','image_two','image_three','image_four','image_one_title',
   'image_one_title_ar','image_one_sub_title','image_one_sub_title_ar','image_two_title','image_two_title_ar',
   'image_two_sub_title','image_two_sub_title_ar','image_three_title','image_three_title_ar','image_three_sub_title',
   'image_three_sub_title_ar','image_four_title','image_four_title_ar','image_four_sub_title','image_four_sub_title_ar',
   'title_twenty_five','title_twenty_five_ar','btn_explore_txt','btn_explore_txt_ar','title_twenty_six',
   'title_twenty_six_ar','btn_see_all','btn_see_all_ar'];
}
