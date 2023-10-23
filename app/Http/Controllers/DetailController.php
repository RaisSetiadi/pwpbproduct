<?php

namespace App\Http\Controllers;

use App\Models\Java;
use App\Models\Javascript;
use App\Models\Laravel;
use App\Models\Post;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    //
    public function laravel($id)
    {
        $laravels = Laravel::where('id',$id)->first();
        return view('user.detailLaravel',compact('laravels'));

    }
    public function posts($id)
    {
        $posts = Post::where('id',$id)->first();
        return view('user.recentPosts',compact('posts'));

    }
    public function java($id)
    {
        $javas = Java::where('id',$id)->first();
        return view('user.detailjava',compact('javas'));

    }
    public function javascript($id)
    {
        $javascripts = Javascript::where('id',$id)->first();
        return view('user.detailjavascript',compact('javascripts'));

    }
}
