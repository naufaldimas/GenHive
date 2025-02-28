<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SongController extends Controller
{
    public function predict(Request $request)
    {
        // Get the file from the request
        $file = $request->file('file');

        if ($file) {
            try {
                // Forward the file from request to POST localhost:5555/predict
                $response = Http::attach(
                    'file', // This is the field name expected by the API
                    file_get_contents($file->getRealPath()),
                    $file->getClientOriginalName()
                )->post('http://localhost:5555/predict');
    
                $data = $response->json();
            } catch (\Exception $e) {
                // Expected error when prediction API is not available
                $data = [
                    'name' => $file->getClientOriginalName(),
                    'genre' => 'Unknown (Prediction API was not available)'
                ];
            }
        }
        else {
            // Empty data when no file was uploaded
            $data = [
                'name' => 'No file uploaded',
                'genre' => 'Unknown'
            ];
        }

        // Get the JSON data from the response
        $song_name = $data['name'];
        $predicted_genre = $data['genre'];

        // TO DO: Implement recommendation logic here
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
