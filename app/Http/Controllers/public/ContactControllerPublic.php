<?php

namespace App\Http\Controllers\Public;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactControllerPublic extends Controller
{


    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'pesan' => 'required|string|max:255',
        ]);

        $data = $request->all();
        Contact::create($data);
        Mail::to('becakdigital@gmail.com')->send(new ContactMail($data));
        return redirect()->route('contact')->with('success', 'Message sent successfully.');
    }

    public function contact()
    {
        return view('public/contact'); 
    }

}
