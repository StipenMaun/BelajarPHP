<?php
/**
 * String function
 * - explode
 * - implode
 * - strlen
 */

 // Explode
 // merubah string menjadi array sesuai dengan pemisahnya

$text_1 = "Halo nama saya Udin";
print_r(explode(" ",$text_1));
echo "<br>";

// Implode
// merubah array menjadi string dengan penghubungnya
$array_1 = ["Halo", "nama", "saya", "Udin"];
echo implode("+", $array_1);
echo "<br>";

// strlen
// menghitung banyaknya karakter pada sebuah string
$text_2 = "Hai Kawan";
echo strlen($text_2);
echo "<br>";

// htmlspecialchars
// merubah tag html menjadi code unik utf-8
$text_3 = "Ini akan menjadi <b>text tebal</b> ya";
echo htmlspecialchars($text_3);
// echo $text_3;
echo "<br>";

// htmlentities
// merubah url
$text_4 = "<a href='https://youtube.com'>Ke Youtube</a>";
echo htmlentities($text_4);
// echo $text_4;
echo "<br>";

// substr
$text_5 = "Apa kabar ?";
echo substr($text_5, 4)."<br>";
echo substr($text_5, 0, 3)."<br>";
echo substr($text_5, 4, -2)."<br>";
echo substr($text_5, -11, -1)."<br>";