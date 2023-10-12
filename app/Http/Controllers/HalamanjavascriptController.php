<?php

namespace App\Http\Controllers;

use App\Models\Javascript;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HalamanjavascriptController extends Controller
{
    //
    public function index():View
    {
    $javascripts = Javascript::paginate(9);
    return view('user.halamanjavascript',compact('javascripts'));
    }
}
