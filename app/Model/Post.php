<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Model\Image;

class Post extends Model
{
    public function category(){
    	return $this->belongsTo(Category::class);
    }

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function images() {
    	return $this->hasMany(Image::class);
    }
}
