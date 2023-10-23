<?php

namespace App\Http\Controllers;

use App\Models\Java;
use App\Models\Laravel;
use App\Models\Post;
use App\Models\ruby;
use App\Models\javascript;
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
        $javascripts = javascript::where('id',$id)->first();
        return view('user.detailjavascript',compact('javascripts'));

    }
    public function ruby($id)
    {
        $rubys = Ruby::where('id',$id)->first();
        return view('user.detailruby',compact('rubys'));
    }
}
