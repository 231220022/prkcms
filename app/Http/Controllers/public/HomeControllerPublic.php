<?php

namespace App\Http\Controllers\Public;

use App\Models\Home;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeControllerPublic extends Controller
{
    public function index()
    {
        $homes = Home::where('active', 1)->get();
        return view('public.home', compact('homes'));
        
    }

}
