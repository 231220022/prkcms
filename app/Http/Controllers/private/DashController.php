<?php

namespace App\Http\Controllers\Private;

use App\Models\Home;
use App\Models\Profile;
use App\Models\Footer;
use App\Models\Contact;
use App\Models\History;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashController extends Controller
{
    public function index()
    {
        {
            $HomeCount = Home::count();
            $ProfileCount = Profile::count();
            $FooterCount = Footer::count();
            $ContactCount = Contact::count();
            $UserCount = User::count();
            $histories = History::latest()->take(10)->get(); 
    
            return view('private.dashboard', compact('HomeCount', 'ProfileCount', 'FooterCount', 'ContactCount','UserCount','histories'));
        }
    }


}
