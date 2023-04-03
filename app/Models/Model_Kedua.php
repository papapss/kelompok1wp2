<?php

namespace App\Models;

class Model_Kedua extends Models

{ 
    public $nilai1, $nilai2, $hasil;

    public function jumlah($n1 = null, $n2 = null)
    { 
        $this->nilai1 = $nil1;
        $this->nilai2 = $nil2;
        $this->hasil = $this->nilai1 + $this->nilai2;
        return $this->hasil;

    }
}