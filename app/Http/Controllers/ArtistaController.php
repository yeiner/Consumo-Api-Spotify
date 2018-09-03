<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SpotifyWebAPI;

class ArtistaController extends Controller
{
    public function detailArtist($id){
        
        $api = new SpotifyWebAPI\SpotifyWebAPI();

        $session = new SpotifyWebAPI\Session(
            env('SPOTIFY_KEY'),
            env('SPOTIFY_SECRET')
        );

        $session->requestCredentialsToken();
        $accessToken = $session->getAccessToken();

        $api->setAccessToken($accessToken);
        //Obtner información de artista.
        $artists = $api->getArtists([
            $id
        ]);

        //Canciones populares de un artista.
        $tracks = $api->getArtistTopTracks($id, [
            'country' => 'se',
        ]);
        return view('artista', ['tracks' => $tracks->tracks,'artista' => $artists->artists[0]]);

    }
}
