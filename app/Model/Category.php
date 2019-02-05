<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function posts(){
    	return $this->hasMany(Post::class);
    }
    public function parent(){
    	return $this->hasOne(Category::class,'id','parent_id');
    }
}
