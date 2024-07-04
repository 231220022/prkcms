<?php

namespace App\Http\Controllers\Private;

use App\Models\Footer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $footers = Footer::all();
        return view('private.footers.index', compact('footers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('private.footers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'link' => 'required|string',
            'status' => 'required|boolean',
        ]);

        $data = $request->all();

        Footer::create($data);

        return redirect()->route('footers.index')->with('success', 'Footer created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Footer $footer)
    {
        return view('private.footers.edit', compact('footer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Footer $footer)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'link' => 'required|string',
            'status' => 'required|boolean',
        ]);

        $data = $request->all();

        $footer->update($data);

        return redirect()->route('footers.index')->with('success', 'Footer updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Footer $footer)
    {
        $footer->delete();

        return redirect()->route('footers.index')->with('success', 'Footer deleted successfully.');
    }
}
