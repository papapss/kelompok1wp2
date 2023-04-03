<?php

namespace App\Controllers;

class Latihan2 extends BaseController
{
 public function index()
 {
 echo "Selamat Datang.. selamat belajar Web Programming";
 //$this->load->view('view-latihan1');
 }

 public function penjumlahan($nil1, $nil2)
 {
 $this->load->models('Model_Kedua');
 $hasil = $this->Model_Kedua->jumlah($nil1, $nil2);
 echo "Hasil Penjumlahan dari". $nil1 ." + ". $nil2 ." = "
.$hasil;
 }
}
