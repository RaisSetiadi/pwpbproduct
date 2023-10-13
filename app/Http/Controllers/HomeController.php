<?php

namespace App\Http\Controllers;

use App\Models\Javascript;
use App\Models\Laravel;
use Illuminate\Http\Request;
use App\Models\Post;
class HomeController extends Controller
{
    //
    public function index()
    {
        $posts = Post::orderBy('tanggal','desc')->limit(6)->get();
        $laravels= Laravel::latest()->paginate(6);
        $javascripts= Javascript::latest()->paginate(6);
        return view('user.index',compact('posts','laravels','javascripts'));
    }
}
