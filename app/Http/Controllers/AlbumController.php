<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AlbumController extends Controller
{
    public function index()
    {
        return response()->json(Album::all(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'        => 'required|string',
            'sales'       => 'required|integer',
            'year'        => 'required|integer',
            'last_update' => 'nullable|date',
            'cover'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('cover')) {
            $path = $request->file('cover')->store('public/album_covers');
            $validated['cover'] = Storage::url($path); // stores as /storage/album_covers/filename
        }

        Album::create($validated);

        return response()->json(['message' => 'Album created successfully.'], 201);

        if ($request->hasFile('cover')) {
            logger('Got file: ' . $request->file('cover')->getClientOriginalName());
        } else {
            logger('No file received.');
        }
        
    }

    public function show(Album $album)
    {
        return response()->json($album, 200);
    }

    public function update(Request $request, Album $album)
    {
        $validated = $request->validate([
            'name'        => 'sometimes|required|string|max:255',
            'sales'       => 'sometimes|required|integer',
            'year'        => 'sometimes|required|integer',
            'last_update' => 'sometimes|required|date',
            'cover'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('cover')) {
            if ($album->cover) {
                $oldPath = str_replace('/storage/', 'public/', $album->cover);
                if (Storage::exists($oldPath)) {
                    Storage::delete($oldPath);
                }
            }

            $file = $request->file('cover');
            $path = $file->store('public/album_covers');
            $validated['cover'] = Storage::url($path); 
        }

        $album->update($validated);

        return response()->json($album, 200);
    }

    public function destroy(Album $album)
    {
        if ($album->cover) {
            $path = str_replace('/storage/', 'public/', $album->cover);
            if (Storage::exists($path)) {
                Storage::delete($path);
            }
        }

        $album->delete();

        return response()->json(['message' => 'Album deleted successfully.'], 200);
    }
    public function totalAlbumsSoldPerArtist()
    {
        $data = \DB::table('artists')
            ->join('albums', 'artists.id', '=', 'albums.artist_id')
            ->select('artists.name', \DB::raw('SUM(albums.sales) as total_sales'))
            ->groupBy('artists.name')
            ->get();

        return response()->json($data);
    }


    public function topSellingArtist()
    {
        $data = \DB::table('artists')
            ->join('albums', 'artists.id', '=', 'albums.artist_id')
            ->select('artists.name', \DB::raw('SUM(albums.sales) as total_sales'))
            ->groupBy('artists.name')
            ->orderByDesc('total_sales')
            ->limit(1)
            ->first();

        return response()->json($data);
    }
    public function albumsByArtist(Request $request)
    {
        $artistName = $request->input('artist');
        
        $albums = \DB::table('albums')
            ->join('artists', 'albums.artist_id', '=', 'artists.id')
            ->where('artists.name', 'LIKE', "%{$artistName}%")
            ->select('albums.*', 'artists.name as artist_name')
            ->get();

        return response()->json($albums);
    }

}
