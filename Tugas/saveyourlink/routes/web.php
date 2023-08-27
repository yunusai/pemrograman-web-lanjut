<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
    echo "Selamat Datang";
});

Route::get('about/$hi', function ($hi) {
    echo "hi $hi";
}); // route dengan yang dapat berubah sesuai variabel

Route::get('about', function () {
    return view('about');
});

Route::get('about/controller', [AboutController::class, 'index']);//pemanggilan controller dari route

