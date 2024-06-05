<?php
/**
 * String function
 */

 // merubah text menjadi huruf kecil
$text_1 = "HELLO GUYS !";
echo strtolower($text_1) . "<br>";

// merubah text menjadi huruf besar
$text_2 = "hello guys !";
echo strtoupper($text_2) . "<br>";

// merubah huruf pada awal kata menjadi besar
echo ucfirst($text_2). "<br>";

// merubah hurul awal pada setiap kata menjadi besar
echo ucwords($text_2)."<br>";

// menghapus karakter pada variabel string tanpa menghilangkan aslinya, depan dan belakang (kiri dan kanan)
$text_3 = "Makan terus";
echo trim($text_3,"Maus")."<br>";
// menghapus karakter sebelah kiri variable string
echo ltrim($text_3,"M")."<br>";
// menghapus karakter sebelah kanan variable string
echo rtrim($text_3,"us")."<br>";

// wordwrap => membatasi karakter yg muncul pada 1 line
$text_4 = "Jika kita ingin mandi, pastikan terdapat air dan usahakan tidak memakan sabunnya.";
echo wordwrap($text_4, 20, "<br> \n");