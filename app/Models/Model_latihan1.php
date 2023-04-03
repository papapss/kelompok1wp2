<?php

namespace App\Models;

use CodeIgniter\Models;

class Model_latihan1 extends Models
{
    protected $nilai1;
    protected $nilai2;
    protected $hasil;

    public function jumlah($n1 = null, $n2 = null)
    {
        $this->nilai1 = $n1;
        $this->nilai2 = $n2;
        $this->hasil = $this->nilai1 + $this->nilai2;
        return $this->hasil;
    }
}