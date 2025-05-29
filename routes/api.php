<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\AlbumSalesController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::middleware('auth:sanctum')->group(function () {
  
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::apiResource('/artists', ArtistController::class);
    Route::apiResource('/albums', AlbumController::class);
    Route::get('/album-sales/total-albums', [AlbumSalesController::class, 'totalAlbumsPerArtist']);
    Route::get('/album-sales/combined-sales', [AlbumSalesController::class, 'combinedSalesPerArtist']);
    Route::get('/album-sales/top-artist', [AlbumSalesController::class, 'topArtistBySales']);
    Route::get('/album-sales/search', [AlbumSalesController::class, 'searchAlbumsByArtist']);
});
