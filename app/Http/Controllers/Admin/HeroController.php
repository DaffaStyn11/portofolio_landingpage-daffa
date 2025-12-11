<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function index()
    {
        $heroes = Hero::orderBy('order')->get();
        return view('admin.heroes.index', compact('heroes'));
    }

    public function create()
    {
        return view('admin.heroes.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'welcome_badge' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'typing_titles' => 'nullable|array',
            'typing_titles.*' => 'nullable|string|max:255',
            'description' => 'required|string',
            'github_url' => 'nullable|url',
            'linkedin_url' => 'nullable|url',
            'instagram_url' => 'nullable|url',
            'order' => 'integer'
        ]);

        // Filter empty values and reindex array
        if (!empty($validated['typing_titles'])) {
            $validated['typing_titles'] = array_values(array_filter($validated['typing_titles'], function($value) {
                return !empty(trim($value));
            }));
            
            if (empty($validated['typing_titles'])) {
                $validated['typing_titles'] = null;
            }
        } else {
            $validated['typing_titles'] = null;
        }

        Hero::create($validated);

        return redirect()->route('admin.heroes.index')->with('success', 'Hero berhasil ditambahkan!');
    }

    public function edit(Hero $hero)
    {
        return view('admin.heroes.edit', compact('hero'));
    }

    public function update(Request $request, Hero $hero)
    {
        $validated = $request->validate([
            'welcome_badge' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'typing_titles' => 'nullable|array',
            'typing_titles.*' => 'nullable|string|max:255',
            'description' => 'required|string',
            'github_url' => 'nullable|url',
            'linkedin_url' => 'nullable|url',
            'instagram_url' => 'nullable|url',
            'order' => 'integer'
        ]);

        // Filter empty values and reindex array
        if (!empty($validated['typing_titles'])) {
            $validated['typing_titles'] = array_values(array_filter($validated['typing_titles'], function($value) {
                return !empty(trim($value));
            }));
            
            if (empty($validated['typing_titles'])) {
                $validated['typing_titles'] = null;
            }
        } else {
            $validated['typing_titles'] = null;
        }

        $hero->update($validated);

        return redirect()->route('admin.heroes.index')->with('success', 'Hero berhasil diupdate!');
    }

    public function destroy(Hero $hero)
    {
        $hero->delete();

        return redirect()->route('admin.heroes.index')->with('success', 'Hero berhasil dihapus!');
    }
}
