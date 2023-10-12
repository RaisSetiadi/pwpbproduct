<?php

namespace App\Http\Controllers;

use App\Models\Java;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HalamanjavaController extends Controller
{
    //
    public function index():View
    {
        $javas = Java::all();
        return view('user.halamanjava',compact('javas'));

    }
}
