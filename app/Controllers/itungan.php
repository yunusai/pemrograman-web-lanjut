<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\rumus_itung; 

defined('BASEPATH') OR exit('No direct script access allowed');
class itungan extends Controller {
          function __construct() {
            //   parent::__construct();
              $this->rumus_itung = new \App\Models\rumus_itung();
          }
          public function index(){
	        echo "Ngitung Luas Persegi Panjang ";
          }
          public function persegi_panjang(){
                     $p = 20; // panjang
                     $l = 10; // lebar
                     $itung['luas'] = $this->rumus_itung->luas_persegi_panjang($p,$l);
                     return view('hasil_itung', $itung);
          }
}
