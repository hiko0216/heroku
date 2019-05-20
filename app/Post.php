<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','price','price_id','user_id','area_id','study_id','image','message'];
}
