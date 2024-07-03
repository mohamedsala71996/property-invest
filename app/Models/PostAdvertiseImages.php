<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostAdvertiseImages extends Model
{
    use HasFactory;
    protected $fillable = ['post_advertise_id', 'image_path'];
    
    public function post()
    {
        return $this->belongsTo(PostAdvertise::class);
    }
}
