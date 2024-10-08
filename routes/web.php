<?php

use App\Http\Controllers\TrackController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\MusicController;



// Route::get('/music', [MusicController::class, 'index'])->name('music.index'); 
// Route::post('/music', [MusicController::class, 'store'])->name('music.store'); 
// Route::get('/music/{music}/download', [MusicController::class, 'download'])->name('music.download'); 

Route::get('/home', [TrackController::class, "home"] )->name('home');
Route::get('/addTracks', [TrackController::class, "addTracks"] )->name('addTracks');
Route::post('/tracks', [TrackController::class, 'store'])->name('tracks.store');
Route::get('/tracks/{track}/download', [TrackController::class, 'download'])->name('tracks.download');
Route::post('/tracks/{track}/comments', [TrackController::class, 'storeComment'])->name('comments.store');
