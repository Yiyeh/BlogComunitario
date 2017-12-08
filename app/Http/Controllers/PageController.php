<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PageController extends Controller
{
    public function welcome(){
        return view('users.index');
    }
    
    public function post($slug){
        return view('users.posts');
    }
    
    public function posts(){
        
        $posts = Post::orderBy('id','desc')->paginate(15);
        $categories = Category::orderBy('name','asc')->get();
        
        $posts->each(function($posts){
            $posts->user;
            $posts->category;
        });
        
        return view('users.posts',compact('posts','categories'));
    }
}
