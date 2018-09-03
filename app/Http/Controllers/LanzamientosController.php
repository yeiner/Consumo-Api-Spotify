<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SpotifyWebAPI;

class LanzamientosController extends Controller
{
    public function getAll(){
    
        $api = new SpotifyWebAPI\SpotifyWebAPI();

        $session = new SpotifyWebAPI\Session(
            env('SPOTIFY_KEY'),
            env('SPOTIFY_SECRET')
        );

        $session->requestCredentialsToken();
        $accessToken = $session->getAccessToken();

        $api->setAccessToken($accessToken);
        //Lista de nuevos lanzamientos
        $releases = $api->getNewReleases();

        return view('lanzamientos', ['albums' => $releases->albums->items]);


    }
}
