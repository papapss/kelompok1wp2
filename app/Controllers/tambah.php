<?php

namespace App\Controllers;

class Tambah extends BaseController
{
    public function index()
    {
        $angka1 = 5;
        $angka2 = 3;
        $hasil = $angka1 + $angka2;
        echo "Hasil penjumlahan dari $angka1 + $angka2 adalah $hasil";
    }
}
