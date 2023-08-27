<?php

namespace App\Models;

use CodeIgniter\Model;

if (!defined('BASEPATH')) exit('No direct script access allowed');
class rumus_itung extends Model
{

    public function __construct()
    {
        parent::__construct();

        // Inisialisasi tambahan jika diperlukan
    }
    public function luas_persegi_panjang($p, $l)
    {
        return $p * $l;
    }

    public function keliling_persegi_panjang($p, $l)
    {
        return 2 * ($p + $l);
    }

    public function luas_lingkaran($r)
    {
        return 3.14 * $r * $r;
    }

    public function keliling_lingkaran($r)
    {
        return 2 * 3.14 * $r;
    }
}
