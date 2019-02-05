<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Post;

class Image extends Model
{
    public function post(){
    	return $this->belongsTo(Post::class);
    }
}
