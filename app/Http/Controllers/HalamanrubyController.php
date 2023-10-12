<?php

namespace App\Http\Controllers;

use App\Models\Ruby;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HalamanrubyController extends Controller
{
    //
    public function index():View
    {
        $rubys = Ruby::all();
        return view('user.halamanruby',compact('rubys'));
    }
}
