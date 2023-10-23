<?php

namespace App\Http\Controllers;

use App\Models\Javascript;
use App\Models\Laravel;
use App\Models\Ruby;
use App\Models\Java;
use Illuminate\Http\Request;
use App\Models\Post;
class HomeController extends Controller
{
    //
    public function index()
    {
<<<<<<< HEAD
        $posts = Post::orderBy('tanggal','desc')->limit(4)->get();
=======
       
>>>>>>> 4274c4bfc4be97b02cebe1317a94e5e075115307
        $laravels= Laravel::latest()->paginate(6);
        $javascripts= Javascript::latest()->paginate(6);  
        $javas= Java::latest()->paginate(6);  
        $rubys= Ruby::latest()->paginate(6);  
        return view('user.index',compact('javas','rubys','laravels','javascripts'));
    }
}
