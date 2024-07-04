<?php

namespace App\Http\Controllers\Public;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileControllerPublic extends Controller
{
    public function index()
    {
        $exps = Profile::where('jenis', 'Pengalaman')
                        ->orderBy('akhir','desc')
                        ->get();
        $edus = Profile::where('jenis', 'Pendidikan')
                        ->orderBy('akhir','desc')
                        ->get();
        $datas = [$exps,$edus];
        return view('public.profile',compact('datas'));
        
    }

}
