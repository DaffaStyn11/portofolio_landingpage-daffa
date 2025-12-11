<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PortfolioContent;
use Illuminate\Http\Request;

class PortfolioContentController extends Controller
{
    public function edit($section)
    {
        $contents = PortfolioContent::where('section', $section)->orderBy('order')->get();
        
        return view('admin.portfolio.edit', compact('contents', 'section'));
    }

    public function update(Request $request, $section)
    {
        $validated = $request->validate([
            'contents' => 'required|array',
            'contents.*.key' => 'required|string',
            'contents.*.value' => 'nullable',
            'contents.*.type' => 'required|string',
        ]);

        foreach ($validated['contents'] as $index => $content) {
            PortfolioContent::updateOrCreate(
                [
                    'section' => $section,
                    'key' => $content['key']
                ],
                [
                    'value' => $content['value'] ?? '',
                    'type' => $content['type'],
                    'order' => $index
                ]
            );
        }

        return redirect()->route('admin.portfolio.edit', $section)
                        ->with('success', 'Konten berhasil diperbarui!');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'section' => 'required|string',
            'key' => 'required|string',
            'value' => 'nullable',
            'type' => 'required|string',
        ]);

        PortfolioContent::create($validated);

        return redirect()->route('admin.portfolio.edit', $validated['section'])
                        ->with('success', 'Konten berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        $content = PortfolioContent::findOrFail($id);
        $section = $content->section;
        $content->delete();

        return redirect()->route('admin.portfolio.edit', $section)
                        ->with('success', 'Konten berhasil dihapus!');
    }
}
