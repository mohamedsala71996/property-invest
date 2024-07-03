<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberShip extends Model
{
    use HasFactory;
    protected $fillable = ['title_one','title_one_ar','title_two','title_two_ar','paragraph_one','paragraph_one_ar',
    'title_three','title_three_ar','title_four','title_four_ar','sp_title','sp_title_ar',
     'sp_price','sp_description','sp_description_ar','bp_title','bp_title_ar','bp_price',
     'bp_description','bp_description_ar','pp_title','pp_title_ar','pp_price','pp_description',
     'pp_description_ar','btn_text','btn_text_ar'];
}
