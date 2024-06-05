<?php
// Operator
// +, -, *, /, %, **
// =, +=, -=, .=
// >, <, >=, <=, <>
// ==, !, ===, !==

// perhitungan dasar
$x = 5;
$y = 10;
$z = $x + $y;
$a = $x - $y;
$b = $x * $y;
$c = $x / $y;
$d = $y % $x;
$e = $y ** $x;

echo $z."<br>";
echo $a."<br>";
echo $b."<br>";
echo $c."<br>";
echo $d."<br>";
echo $e."<br>";

$n1 = 20;

echo $x += $y; // 15
echo "<br>";
echo $x += $y; // 20
echo "<br>";
echo $x -= $y; // 15
echo "<br>";
echo $x *= $y; // 150
echo "<br>";
echo $x."<br>";

$namanya = "Johan";
$namanya .= " Muhtadin";
$namanya .= " tinggal di Bogor";

echo $namanya . "<br>";

// perbandingan
$nilai1 = 20;
$nilai2 = 30;
// $nilai3 = "30";
$nilai3 = 25;

var_dump($nilai1 > $nilai2);
echo "<br>";
var_dump($nilai1 < $nilai2);
echo "<br>";
var_dump($nilai1 <= $nilai2);
echo "<br>";
var_dump($nilai1 >= $nilai2);
echo "<br>";
var_dump($nilai1 <> $nilai2);
echo "<br>";
var_dump($nilai2 <=> $nilai3);
echo "<br>";
var_dump($nilai2 == $nilai3);
echo "<br>";
var_dump($nilai2 === $nilai3);
echo "<br>";
var_dump($nilai2 !== $nilai3);
echo "<br>";

// increment / decrement
// ++, --

$xx = 10;
// echo ++$xx; // pre-increment
echo "<br>";
// echo $xx++; // post-increment
echo "<br>";
// echo --$xx; // pre-decrement
echo "<br>";
echo $xx--; // post-decrement
echo "<br>";


// logical operator
// and, or, xor, &&, ||, !

var_dump($xx < 9 && 20);
echo "<br>";
var_dump($xx < 9 || 20);
echo "<br>";
var_dump($xx == 10 xor $xx == 20);
echo "<br>";

// condisional assignment operator
// ?, ??

// jika user bukan Joni maka hasilnya anonim, jika user Joni maka hasilnya benar
$user = "";
echo $status = ($user != "Joni") ? "anonim" : "benar";
echo "<br>";

// variabel warna kosong atau tidak ada maka tampilkan putih, jika ada maka tampilkan isi variable warna

// $warna = "merah";
echo $warna = $warna ?? "putih";











?>