<?php

use Illuminate\Support\Facades\Route;
use App\Photo;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'MainController@index');


Route::get('/', function () {
    return view('home');
    //return view('main');
});

Route::get('/photos', function () {

    $photos = Photo::all();
    return view('photos', compact('photos') );
    //return view('main');
});


Route::get('/about', function () {
    return view('about');
    //return view('main');
});
