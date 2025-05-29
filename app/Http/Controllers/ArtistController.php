<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function index()
    {
        return response()->json(Artist::all());
    }

    public function create()
    {
        // If you're using API-only, you might not need this.
        return response()->json(['message' => 'Display form (not used in API)']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $artist = Artist::create([
            'name' => $request->name,
        ]);

        return response()->json($artist, 201);
    }

    public function show(Artist $artist)
    {
        return response()->json($artist);
    }

    public function edit(Artist $artist)
    {
        // Same as create - typically not used in API
        return response()->json(['message' => 'Edit form (not used in API)']);
    }

    public function update(Request $request, Artist $artist)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $artist->update([
            'name' => $request->name,
        ]);

        return response()->json($artist);
    }

    public function destroy(Artist $artist)
    {
        $artist->delete();

        return response()->json(['message' => 'Artist deleted']);
    }
}
