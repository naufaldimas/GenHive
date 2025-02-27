<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongController extends Controller
{
    public function predict(Request $request)
    {
        // Dummy data for testing
        $song_name = "Bohemian Rhapsody";
        $predicted_genre = "Rock";

        // Tambahkan videoId untuk link YouTube
        $recommendations = [
            ['title' => 'Stairway to Heaven', 'genre' => 'Rock', 'videoId' => 'QkF3oxziUI4'],
            ['title' => 'Hotel California', 'genre' => 'Rock', 'videoId' => '09839DpTctU'],
            ['title' => 'Sweet Child O’ Mine', 'genre' => 'Rock', 'videoId' => '1w7OgIMMRc4'],
            ['title' => 'Smoke on the Water', 'genre' => 'Rock', 'videoId' => 'Q2FzZSBD5LE'],
            ['title' => 'Livin’ on a Prayer', 'genre' => 'Rock', 'videoId' => 'lDK9QqIzhwk']
        ];

        // Redirect ke tampilan result dengan data
        return view('result', compact('song_name', 'predicted_genre', 'recommendations'));
    }
}
