<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::get('/', function () {
    $lugares = DB::select("select * from lugaresturisticos");
    return view('pages.inicio', ['lugares' => $lugares, 'noticias' => []]);
});

Route::get('/inicio', function () {
    $lugares = DB::select("select * from lugaresturisticos");
    return view('pages.inicio', ['lugares' => $lugares, 'noticias' => []]);
});

Route::get('/lugares', function () {
    $lugares = DB::select("select * from lugaresturisticos");
    return view('pages.lugares', ['lugares' => $lugares]);
});

Route::get('/contactanos', function () {
    return view('pages.contactanos');
});
