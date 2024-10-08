<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;  


use App\Models\Music; // Track -> Music
// ...

class MusicController extends Controller // TrackController -> MusicController
{
    public function index()
    {
        $music = Music::all(); // Track -> Music
        return view('music.index', compact('music')); // tracks -> music 
    }

    public function store(Request $request) 
    {
        $request->validate([
            'title' => 'required', 
            'artist' => 'required', 
            'track' => 'required|file|mimetypes:audio/*|max:10000', 
            'track.mimetypes' => 'Файл  должен  быть  аудиозаписью.',
            'track.max' => 'Размер  файла  не  должен  превышать  10 МБ.',
        ]);

        $trackPath = 'public/music/' . $request->file('track')->getClientOriginalName();
        $request->file('track')->storeAs('public/music', $request->file('track')->getClientOriginalName());      
        Log::info('Сохранён файл: ' . $trackPath); 

        Music::create([
            'title' => $request->title,
            'artist' => $request->artist,
            'file_path' => $trackPath, 
        ]);

        return redirect()->route('music.index');
    }

    public function download($id)
    {
    $track = Music::findOrFail($id); 
    if (!file_exists(storage_path('app/' . $track->file_path))) {
        die('Файл не найден: ' . storage_path('app/' . $track->file_path));
    }
    return Storage::download($track->file_path);
    }

}

