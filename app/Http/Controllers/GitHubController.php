<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GitHubController extends Controller
{
    public function search( Request $request) {
        $query = $request->input('q');

        if (!$query) {
            return view('github.search',['results' => []]);
        }

        $response = Http::get("https://api.github.com/search/repositories", ['q' => $query,]);

        $results = $response->json()['items'];

        return view('github.search',['results' => $results]);
    }
}
