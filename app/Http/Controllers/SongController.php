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
        $recommendations_rock = [
            ['title' => 'Stairway to Heaven', 'artist' => 'Led Zeppelin', 'videoId' => 'QkF3oxziUI4'],
            ['title' => 'Hotel California', 'artist' => 'Eagles', 'videoId' => '09839DpTctU'],
            ['title' => 'Sweet Child O’ Mine', 'artist' => 'Guns N’ Roses', 'videoId' => '1w7OgIMMRc4'],
            ['title' => 'Smoke on the Water', 'artist' => 'Deep Purple', 'videoId' => 'Q2FzZSBD5LE'],
            ['title' => 'Livin’ on a Prayer', 'artist' => 'Bon Jovi', 'videoId' => 'lDK9QqIzhwk']
        ];
        
        $recommendations_jpop = [
            ['title' => 'Lemon', 'artist' => 'Kenshi Yonezu', 'videoId' => 'SX_ViT4Ra7k'],
            ['title' => 'Pretender', 'artist' => 'Official HIGE DANDism', 'videoId' => 'TQ8WlA2GXbk'],
            ['title' => 'Idol', 'artist' => 'YOASOBI', 'videoId' => 'ZRtdQ81jPUQ'],
            ['title' => 'Magic', 'artist' => 'Mrs. GREEN APPLE', 'videoId' => 'CN-Ja6jCweA'],
            ['title' => 'Uchiage Hanabi', 'artist' => 'DAOKO × Kenshi Yonezu', 'videoId' => 'dT2owtxkU8k']
        ];

        $recommendations_kpop = [
            ['title' => 'Psycho', 'artist' => 'Red Velvet', 'videoId' => 'uR8Mrt1IpXg'],
            ['title' => 'Savage', 'artist' => 'aespa', 'videoId' => 'WPdWvnAAurg'],
            ['title' => 'Pink Venom', 'artist' => 'BLACKPINK', 'videoId' => 'gQlMMD8auMs'],
            ['title' => 'I AM', 'artist' => 'IVE', 'videoId' => '6ZUIwj3FgUY'],
            ['title' => 'Unforgiven', 'artist' => 'LE SSERAFIM', 'videoId' => 'UBURTj20HXI']
        ];
        
        $recommendations_rnb = [
            ['title' => 'Blinding Lights', 'artist' => 'The Weeknd', 'videoId' => 'fHI8X4OXluQ'],
            ['title' => 'Earned It', 'artist' => 'The Weeknd', 'videoId' => 'waU75jdUnYw'],
            ['title' => 'Take Care', 'artist' => 'Drake ft. Rihanna', 'videoId' => 'waU75jdUnYw'],
            ['title' => 'Adorn', 'artist' => 'Miguel', 'videoId' => '8dM5QYdTo08'],
            ['title' => 'Location', 'artist' => 'Khalid', 'videoId' => 'by3yRdlQvzs']
        ];
        
        $recommendations_hiphop = [
            ['title' => 'Sicko Mode', 'artist' => 'Travis Scott', 'videoId' => '6ONRf7h3Mdk'],
            ['title' => 'God’s Plan', 'artist' => 'Drake', 'videoId' => 'xvZqHgFz51I'],
            ['title' => 'HUMBLE.', 'artist' => 'Kendrick Lamar', 'videoId' => 'tvTRZJ-4EyI'],
            ['title' => 'Rich Flex', 'artist' => 'Drake & 21 Savage', 'videoId' => 'z0RE1Q8jy7Y'],
            ['title' => 'Super Gremlin', 'artist' => 'Kodak Black', 'videoId' => 'kiB9qk4gnt4']
        ];
        
        $recommendations_pop = [
            ['title' => 'Levitating', 'artist' => 'Dua Lipa', 'videoId' => 'TUVcZfQe-Kw'],
            ['title' => 'As It Was', 'artist' => 'Harry Styles', 'videoId' => 'H5v3kku4y6Q'],
            ['title' => 'Don’t Start Now', 'artist' => 'Dua Lipa', 'videoId' => 'oygrmJFKYZY'],
            ['title' => 'Vampire', 'artist' => 'Olivia Rodrigo', 'videoId' => 'RlPNh_PBZb4'],
            ['title' => 'Shivers', 'artist' => 'Ed Sheeran', 'videoId' => 'Il0S8BoucSA']
        ];
        
        $recommendations_edm = [
            ['title' => 'Ghost', 'artist' => 'Alan Walker & Au/Ra', 'videoId' => '1DCiUhNn9rc'],
            ['title' => 'Faded', 'artist' => 'Alan Walker', 'videoId' => '60ItHLz5WEA'],
            ['title' => 'Where You Are', 'artist' => 'John Summit & Hayla', 'videoId' => '5BqjhUmldDc'],
            ['title' => 'Hero', 'artist' => 'Martin Garrix & JVKE', 'videoId' => 'J5spiMVI9U8'],
            ['title' => 'I’m Good (Blue)', 'artist' => 'David Guetta & Bebe Rexha', 'videoId' => '90RLzVUuXe4']
        ];
        
        $recommendations_indie = [
            ['title' => 'Take a Walk', 'artist' => 'Passion Pit', 'videoId' => 'dZX6Q-Bj_xg'],
            ['title' => 'Electric Feel', 'artist' => 'MGMT', 'videoId' => 'MmZexg8sxyk'],
            ['title' => 'Somebody Else', 'artist' => 'The 1975', 'videoId' => 'Bimd2nZirT4'],
            ['title' => 'Do I Wanna Know?', 'artist' => 'Arctic Monkeys', 'videoId' => 'bpOSxM0rNPM'],
            ['title' => 'Riptide', 'artist' => 'Vance Joy', 'videoId' => 'uJ_1HMAGb4k']
        ];
        
    
        // Redirect ke tampilan result dengan data
        return view('result', compact('song_name', 'predicted_genre', 'recommendations_kpop'));
    }
}
