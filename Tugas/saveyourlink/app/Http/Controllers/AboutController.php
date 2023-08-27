<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $nama = "Muhammad Yunus Saifullah";
        $prodi = "Teknik Informatika";
        $kota_asal = "Pati";
        return view('sama.about'); //menampilkan views blade halaman about yang ada  di folder sama
        //return view('about'); menampilkan views blade halaman about
    }
    //
}
