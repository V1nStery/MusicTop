<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Track;
use App\Models\Comment;
use Illuminate\Support\Facades\Log; 
use Illuminate\Support\Facades\Storage;

class TrackController extends Controller
{

    public function __construct()
    {
        $this->genres = Track::distinct()->pluck('genre');
        view()->share('genres', $this->genres);
    }

    public function home(Request $request)
    {
        $selectedGenre = $request->input('genre');
        $searchTerm = $request->input('search');

        $tracksQuery = Track::with('comments');

        if ($selectedGenre) {
            $tracksQuery->where('genre', $selectedGenre);
        }

        if ($searchTerm) {
            $tracksQuery->where(function ($query) use ($searchTerm) {
                $query->where('name', 'like', '%' . $searchTerm . '%')->orWhere('artist', 'like', '%' . $searchTerm . '%');
            });
        }

        $tracks = $tracksQuery->get();

        return view('tracks.home', compact('tracks', 'selectedGenre', 'searchTerm')); 
    }

    
    public function addTracks() {

        return view('tracks.addTracks');
    }
    
    public function store(Request $request) {

        $validatedData = $request->validate([
            'artist' => 'required',
            'name' => 'required',
            'genre' => 'required',
            'track' => 'required|file|mimetypes:audio/*|max:15360',
        ]);
    
        if ($request->hasFile('track')) {
            $trackFile = $request->file('track');
            $fileName = $trackFile->getClientOriginalName();
            $filePath = $trackFile->store('public/tracks');
    
            $track = new Track;
            $track->artist = $validatedData['artist'];
            $track->name = $validatedData['name'];
            $track->genre = $validatedData['genre'];
            $track->file_path = str_replace('public/', '', $filePath);
            $track->file_name = $fileName;
            Log::info('Filename before save: ' . $fileName);
            $track->save();
        }
        
        return redirect()->route('home');
    }

    public function storeComment(Request $request, Track $track)
    {
        $track->comments()->create($request->validate([
            'username' => 'required',
            'body' => 'required'
        ]));
        return back();
    }

    public function download(Track $track) {

    $filePath = 'public/' . $track->file_path;

    if (!Storage::exists($filePath)) { 
        abort(404, 'Файл не найден'); 
    }

    return Storage::download($filePath); 
}
}
