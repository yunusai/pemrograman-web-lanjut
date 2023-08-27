<?php

namespace App\Models;

use CodeIgniter\Model;

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class rumus_itung extends Model {

    public function __construct()
    {
        parent::__construct();

        // Inisialisasi tambahan jika diperlukan
    }
	public function luas_persegi_panjang($p,$l) {
		return $p*$l;
	}
}
