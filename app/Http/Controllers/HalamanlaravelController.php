<?php

namespace App\Http\Controllers;

use App\Models\Laravel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HalamanlaravelController extends Controller
{
    //
    public function index():View
    {
        $laravels = Laravel::paginate(9);
        return view('user.halamanLaravel',compact('laravels'));
    }
}
