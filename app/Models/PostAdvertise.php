<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostAdvertise extends Model
{
    use HasFactory;
    protected $fillable = ['duration', 'duration_price', 'new_resell', 'rent_sell','price','cash_installment','advance_payment',
                           'remaining_amount','installment_duration','total_amount','property_type','property_size',
                           'location','bedrooms_no','Bathrooms_no','floors_no','Construction_year','th_d_image_path',
                           'name','email','phone','latitude','longitude','title','description'];
                           
   public function images()
   {
        return $this->hasMany(PostAdvertiseImages::class);
   }                        
}
