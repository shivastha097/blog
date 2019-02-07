<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;
use App\Model\Summernote;

class PostsController extends Controller
{
    public function posts(){
    	$posts = Post::paginate(5);
    	return view('public.index', compact('posts'));
    }

    public function post($slug){
    	$post = Post::where('slug', $slug)->firstOrFail();
    	return view('public.post', compact('post', 'summernote'));
    }
}
