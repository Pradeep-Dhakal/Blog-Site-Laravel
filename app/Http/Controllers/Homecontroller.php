<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
class Homecontroller extends Controller
{
    //
    public function show_post(){
        $post=Post::paginate(2);
        return view('home',['post'=>$post]);
    }
}
