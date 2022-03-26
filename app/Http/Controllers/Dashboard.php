<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class Dashboard extends Controller
{
    //
    public function show_post(Request $request){
        // $post=Post::all();
        $userid=$request->user()->id;
        $post=Post::where('user_id',$userid)->get();
        return view('dashboard',['post'=>$post]);
    }


}
