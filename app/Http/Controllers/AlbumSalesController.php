<?php

namespace App\Http\Controllers;

use App\Models\AlbumSales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlbumSalesController extends Controller
{
    // 1. Total number of albums per artist
    public function totalAlbumsPerArtist()
    {
        $data = DB::table('album_sales')
            ->select('name', DB::raw('COUNT(album) as total_albums'),DB::raw('SUM(sales) as total_sales'))
            ->groupBy('name')
            ->get();

        return response()->json($data);
    }

    // 2. Combined album sales per artist
    public function combinedSalesPerArtist()
    {
        $data = DB::table('album_sales')
            ->select('name', DB::raw('SUM(sales) as total_sales'))
            ->groupBy('name')
            ->get();

        return response()->json($data);
    }

    // 3. Top 1 artist by combined album sales
    public function topArtistBySales()
    {
        $topArtist = DB::table('album_sales')
            ->select('name', DB::raw('SUM(sales) as total_sales'))
            ->groupBy('name')
            ->orderByDesc('total_sales')
            ->first();

        return response()->json($topArtist);
    }

    // 4. List of albums by searched artist
    public function searchAlbumsByArtist(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
        ]);

        $artistName = $request->input('name');

        $albums = DB::table('album_sales')
            ->where('name', 'like', "%{$artistName}%")
            ->get();

        return response()->json([
            'name' => $artistName,
            'albums' => $albums,
        ]);
    }
}
