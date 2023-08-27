<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinkController;

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
    return view('pages.home');
})->name('home');

Route::get('/saveLink', [LinkController::class, 'daftar'])->name('daftar');

Route::get('/youtubeView', [LinkController::class, 'youtube'])->name('youtubeView');

Route::get('/create', [LinkController::class, 'create'])->name('create');

Route::get('/delete/{id}', [LinkController::class, 'delete'])->name('delete');

Route::get('/tentang', function () {
    return view('pages.tentang');
});
