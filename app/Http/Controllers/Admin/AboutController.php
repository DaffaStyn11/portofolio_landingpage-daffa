<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::orderBy('order')->get();
        return view('admin.abouts.index', compact('abouts'));
    }

    public function create()
    {
        return view('admin.abouts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'years_experience' => 'required|string|max:50',
            'projects_completed' => 'required|string|max:50',
            'image' => 'nullable|string',
            'order' => 'integer'
        ]);

        About::create($validated);

        return redirect()->route('admin.abouts.index')->with('success', 'About berhasil ditambahkan!');
    }

    public function edit(About $about)
    {
        return view('admin.abouts.edit', compact('about'));
    }

    public function update(Request $request, About $about)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'years_experience' => 'required|string|max:50',
            'projects_completed' => 'required|string|max:50',
            'image' => 'nullable|string',
            'order' => 'integer'
        ]);

        $about->update($validated);

        return redirect()->route('admin.abouts.index')->with('success', 'About berhasil diupdate!');
    }

    public function destroy(About $about)
    {
        $about->delete();

        return redirect()->route('admin.abouts.index')->with('success', 'About berhasil dihapus!');
    }
}
