<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function index()
    {
        // Fetch all music entries, ordered by newest first
        $musics = Music::latest()->get();
        return view('music.index', compact('musics'));
    }

    public function create()
    {
        return view('music.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'artist' => 'required',
            'genre' => 'required',
        ]);

        Music::create($validated);

        return redirect()->route('music.index')
            ->with('success', 'Music created successfully.');
    }

    public function edit(Music $music)
    {
        return view('music.edit', compact('music'));
    }

    public function update(Request $request, Music $music)
    {
        $validated = $request->validate([
            'name' => 'required',
            'artist' => 'required',
            'genre' => 'required',
        ]);

        $music->update($validated);

        return redirect()->route('music.index')
            ->with('success', 'Music updated successfully.');
    }

    public function destroy(Music $music)
    {
        $music->delete();

        return redirect()->route('music.index')
            ->with('success', 'Music deleted successfully.');
    }
}