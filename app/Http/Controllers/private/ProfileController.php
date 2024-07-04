<?php

namespace App\Http\Controllers\Private;
use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profiles = Profile::all();
        return view('private.profiles.index', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('private.profiles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'awal' => 'required|string|max:255',
            'akhir' => 'required|string',
            'jenis' => 'required|string',
            'jabatan' => 'required|string',
            'almt_ins' => 'required|string',
            'deskripsi' => 'required|string',
        ]);

        $data = $request->all();

        Profile::create($data);

        return redirect()->route('profiles.index')->with('success', 'Profile created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        return view('private.profiles.show', compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        return view('private.profiles.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile)
    {
        $request->validate([
            'awal' => 'required|string|max:255',
            'akhir' => 'required|string',
            'jenis' => 'required|string',
            'jabatan' => 'required|string',
            'almt_ins' => 'required|string',
            'deskripsi' => 'required|string',
        ]);

        $data = $request->all();
        $profile->update($data);

        return redirect()->route('profiles.index')->with('success', 'Profiles updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        $profile->delete();
        return redirect()->route('profiles.index')->with('success', 'Profiles deleted successfully.');
    }
}
