<?php

namespace App\Http\Controllers\Private;

use App\Models\Home;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $homes = Home::all();
        return view('private.homes.index', compact('homes'));
    }

    public function create()
    {
        return view('private.homes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'salam' => 'required|string|max:255',
            'konten' => 'required|string',
            'active' => 'required|boolean',
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image_path')) {
            $image = $request->file('image_path');
            $imagePath = $image->store('images', 'public');
            $data['image_path'] = $imagePath;
        }

        Home::create($data);

        return redirect()->route('homes.index')->with('success', 'Home created successfully.');
    }

    public function show(Home $home)
    {
        return view('private.homes.show', compact('home'));
    }

    public function edit(Home $home)
    {
        return view('private.homes.edit', compact('home'));
    }

    public function update(Request $request, Home $home)
    {
        $request->validate([
            'salam' => 'required|string|max:255',
            'konten' => 'required|string',
            'active' => 'required|boolean',
            'image_path' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image_path')) {
            $image = $request->file('image_path');
            $imagePath = $image->store('images', 'public');
            $data['image_path'] = $imagePath;
        }

        $home->update($data);

        return redirect()->route('homes.index')->with('success', 'Home updated successfully.');
    }

    public function destroy(Home $home)
    {
        $home->delete();
        return redirect()->route('homes.index')->with('success', 'Home deleted successfully.');
    }
}
