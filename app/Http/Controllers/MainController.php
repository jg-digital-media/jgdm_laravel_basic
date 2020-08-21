<?php

namespace App\Http\Controllers;
use App\Photo;

use Illuminate\Http\Request;

$photos = Photo::all();

class MainController extends Controller
{
    //function list all photos
    public function index() {
        $photos = Photo::all();
        return view('photos', ["photos" => $photos] );
    }
}
