<?php

class Private1{
    private $merk = "Acer Aspiran";
    public function tampilkan_laptop(){
        return $this->merk."<br/>";
    }
}

class Turunnya extends Private1{
    public function barang(){
        return $this->merk."<br/>";
    }
}

$laptop = new Private1();
$barang = new Turunnya();

echo $laptop->tampilkan_laptop(); // dari Private1
echo $barang->barang(); // dari Turunnya ==> hasilnya error