<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
   public function index(){
        return view('Posts', [
            "title" => "All Post",
            "posts" => Post::latest()->get() //with sebagai N+1 Problem
        ]);
   }

   public function show(Post $post){
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
   }
}
