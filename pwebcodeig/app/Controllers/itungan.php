<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\rumus_itung;

defined('BASEPATH') or exit('No direct script access allowed');
class itungan extends Controller
{
  function __construct()
  {
    // parent::__construct();
    $this->rumus_itung = new rumus_itung();
  }
  public function index()
  {
    echo "Ngitung Luas Persegi Panjang ";
  }

  public function persegi_panjang()
  {
    $p = $this->request->getPost('panjang');
    $l = $this->request->getPost('lebar');
    // $p = 20; // panjang
    // $l = 10; // lebar
    $itung['luas'] = $this->rumus_itung->luas_persegi_panjang($p, $l);
    $itung['keliling'] = $this->rumus_itung->keliling_persegi_panjang($p, $l);
    // return redirect()->to('/', $itung);
    return view('hasil_itung', $itung);
  }

  public function lingkaran()
  {
    $r = $this->request->getPost('rusuk');
    // $p = 20; // panjang
    // $l = 10; // lebar
    $itung['luas'] = $this->rumus_itung->luas_lingkaran($r);
    $itung['keliling'] = $this->rumus_itung->keliling_lingkaran($r);
    return view('lingkaran', $itung);
  }
}
