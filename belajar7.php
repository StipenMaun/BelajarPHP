<?php
/**
 * PHP Array
 * Array adalah sebuah variable yang menampung banyak data. Dipisahkan menggunakan tanda koma.
 * Indexed array = inisiasi dengan menggunakan angka
 * Associative array = inisiasi dengan menggunakan (named array key)
 * Multidimentional array = array yang lebih dari 1 array
 */

 // Penggunaan sederhana
 $hewan = array(1,2,3);
 $kendaraan = ["mobil", "motor", "kereta", "kapal"];

 echo $hewan[0]; // maka yang muncul adalah angka 1
 echo "<br>";
 echo count($hewan); // fungsinya untuk menghitung jumlah data array pada variabel
 echo "<br>";
 echo "<pre>";
var_dump($hewan);
echo "</pre>";
echo "<br>";
var_dump($kendaraan);
echo "<br>";
// merubah isi array
$kendaraan[1] = "bajaj";
var_dump($kendaraan);
echo "<br>";
// menambah isi array
array_push($kendaraan, "Sepeda");
var_dump($kendaraan);
echo "<br>";
// menghapus data array
unset($kendaraan[1]);
var_dump($kendaraan);
echo "<br>";
$kendaraan[1] = "pesawat"; // tambah 1 ke kanan
var_dump($kendaraan);
echo "<br>";
array_splice($kendaraan, 2, 2);
var_dump($kendaraan);
echo "<br>";
// menghapus data tetapi tidak merubahnya, hanya sebuah filter untuk mentiadakan isi data pada variabel baru sesuai dengan parameter
$ken = array_diff($kendaraan, ["kereta","pesawat"]);
var_dump($ken);
echo "<br>";

// array assosiative
$mhs_1 = array("nama"=>"Budi", "umur"=>"20 tahun", "hobi" => "memancing");
echo "<pre>";
var_dump($mhs_1);
echo "</pre>";
echo "<br>";
echo $mhs_1["nama"];
echo "<br>";

// melakukan looping data array
// index array
foreach($kendaraan as $row){
    echo $row . "<br>";
}

// associative array
foreach ($mhs_1 as $key => $val) {
    echo $key . "===> " . $val . "<br>";
}

echo "<br>";
// Sorting pada array
$buah = ["salak", "manggis", "apel", "pisang", "durian"];
// mengurutkan data array secara ascending order
sort($buah);
for($x = 0; $x < count($buah); $x++){
    echo $buah[$x] . "<br>";
}
echo "<br>";

// mengurutkan data array secara descending order
rsort($buah);
for($i = 0; $i < count($buah); $i++){
    echo $buah[$i] . "<br>";
}
echo "<br>";