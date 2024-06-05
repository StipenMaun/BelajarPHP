<?php
/*
PHP Conditional
** IF
** ELSE
** ELSE IF
*/
$no = 1;
if ($no > 0) {
    echo "Besar <br>";
}

// Jika variable nama ada isinya atau kosong
$nama = "";
if($nama != ""){
    echo "Nama sudah ada yaitu " . $nama;
}else{
    echo "Nama masih kosong";
}

echo "<br>";

// Kondisional untuk jenis kelamin / gender
$jk = "L";
if ($jk == "L") {
    echo "Laki-laki";
}elseif ($jk == "P") {
    echo "Perempuan";
}else {
    echo "Rahasia";
}

echo "<br>";

// membuat ganjil genap
$nomor = 8;
if ($nomor % 2 == 0) {
    echo $nomor." merupakan bilangan genap";
}else {
    echo $nomor." merupakan bilangan ganjil";
}
echo "<br>";

// Menentukan tahun kabisat
$tahun = 2024;
if ($tahun % 4 == 0) {
    echo "Tahun" . $tahun . "adalah tahun kabisat";
}else {
    echo "Tahun" . $tahun . "adalah bukan tahun kabisat";
}
echo "<br>";

// menentukan waktu
date_default_timezone_set('Asia/Jakarta');
$jam = date("H");
// echo $jam;

if ($jam >= 5 && $jam < 12) {
    echo "Pukul ".$jam." adalah waktu pagi";
}elseif ($jam >= 12 && $jam < 16) {
    echo "Pukul ".$jam." adalah waktu siang";
}elseif ($jam >= 16 && $jam < 18) {
    echo "Pukul ".$jam." adalah waktu sore";
}elseif ($jam >= 18 && $jam < 23) {
    echo "Pukul ".$jam." adalah waktu malam";
}else {
    echo "Pukul ".$jam." adalah tengah malam menuju subuh";
}

// logika nilai 0 -> 100
echo "<br>";
$nilai = 78;
if ($nilai < 0 || $nilai > 100) {
    echo "Nilai tidak valid";
}else {
    echo "Nilai valid ".$nilai;
}
echo "<br>";

// range grade nilai
if ($nilai >= 85 && $nilai <= 100) {
    echo "Grade nilai ".$nilai." adalah A";
}elseif ($nilai >=  75 && $nilai <= 84) {
    echo "Grade nilai ".$nilai." adalah B";
}elseif ($nilai >=  65 && $nilai <= 74) {
    echo "Grade nilai ".$nilai." adalah C";
}elseif ($nilai >=  55 && $nilai <= 64) {
    echo "Grade nilai ".$nilai." adalah D";
}elseif ($nilai >=  0 && $nilai <= 54) {
    echo "Grade nilai ".$nilai." adalah E";
}else {
    echo "Nilai tidak valid";
}








