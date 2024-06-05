<?php

class Class_motor 
{
    public $nama;
    public $warna;

    // constructor
    public function __construct(){
        echo "Ini adalah construct dari class motor <br/>";
    }

    public function __destruct(){
        echo "Ini adalah destruct dari class motor <br/>";
    }

    public function muncul_nama($nama){
        // $this->nama berasal dari var $nama
        // $nama berasal dari parameter
        $this->nama = $nama;

        return "Nama motor adalah ".$this->nama ."<br/>";
    }
}

class moge extends Class_motor{
    public $nama_moge;

    public function namamoge($moge){
        $this->nama_moge = $moge;
    }
}

// inisiasi = intansiasi
// $motoran = new Class_motor();
$motoran = new moge();

// memanggil method dari class_motor
echo $motoran->muncul_nama("honda");

// memanggil method dari class moge
$motoran->namamoge("Harley Davidson");
echo $motoran->nama_moge . "<br/>";