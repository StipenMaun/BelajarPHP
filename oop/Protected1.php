<?php

class Protected1{
    protected $nama_mhs = "Budi";

    public function panggil_nama(){
        return "Ini adalah function panggil_nama.".$this->nama_mhs;
    }
}

class Turunan extends Protected1{
    public function namanya(){
        return "Ini diambil melalui class turunan. Isinya diambil dari Protected1 ". $this->nama_mhs;
    }
}

// $mahasiswa = new Protected1();
$mahasiswa = new Turunan();
// $mahasiswa->nama_mhs = "Budi";
// echo $mahasiswa->panggil_nama(); // Class Protected1
echo $mahasiswa->namanya(); // Class Turunan
