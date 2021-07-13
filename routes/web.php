<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function(){
    $navLinks = config("navlinks");
    $footerLinks = config("footerlinks");
    return view('homepage',[
        "navlinks" => $navLinks,
        "footerlinks" => $footerLinks
    ]);
});

Route::get('/comics', function () {
    $navLinks = config("navlinks");
    $comics = config("comics");
    $footerLinks = config("footerlinks");
    return view('comics', [
        "navlinks" => $navLinks,
        "comics" => $comics,
        "footerlinks" => $footerLinks
    ]);
});
