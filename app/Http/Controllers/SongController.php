<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index()
    {
        $genres = Song::distinct()->pluck('genre');
        $tracks = Song::all(); // Или выборку по жанру, если на странице сразу фильтр
        return view('songs.index', compact('genres', 'songs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'track_file' => 'required|file|mimes:audio/mpeg,audio/ogg,audio/mp3,audio', // Типы файлов
        ]);

        // Обработка загрузки файла (смотри документацию Laravel)
        $filePath = $request->file('song_file')->store('songs');

        Track::create([
            'name' => $request->name,
            'genre' => $request->genre,
            'file_path' => $filePath, 
        ]);

        return redirect()->route('songs.index')->with('success', 'Трек успешно добавлен!');
    }

    public function download(Song $song)
    {
        return response()->download(storage_path('app/' . $track->file_path));
    }
}
