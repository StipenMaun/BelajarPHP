<?php

function kabar($nama = "Budi", $info = "baik"){
    return "kabar $nama $info";
}

echo kabar("Jeki", "sakit")."<br>";

function tambah($a, $b){
    return $a + $b;
}
echo tambah(5,9)."<br>";

$x = 7;
function kalkulator($y){
    global $x; // scope / ruang lingkup
    return $x - $y;
}
echo kalkulator(3);