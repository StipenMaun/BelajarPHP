<?php
/**
 * Multidimentional array
 */

 $toko = array(
    array("Sabun", 50, 20), // 0
    array("Molto", 30, 10), // 1
    array("Minyak Goreng", 45, 15), // 2
    array("Kopi Luwak", 48, 16) // 
 );

 // pemanggilan secara statik
 echo "nama barang : ".$toko[0][0] . ", stok : " .$toko[0][1]. ", terjual : " . $toko[0][2] . "<br>";
 echo "nama barang : ".$toko[1][0] . ", stok : " .$toko[1][1]. ", terjual : " . $toko[1][2] . "<br>";
 echo "nama barang : ".$toko[2][0] . ", stok : " .$toko[2][1]. ", terjual : " . $toko[2][2] . "<br>";
 echo "nama barang : ".$toko[3][0] . ", stok : " .$toko[3][1]. ", terjual : " . $toko[3][2] . "<br>";

 // pemanggilan secara dinamis (dengan looping)
$inisial = ["Nama barang : ", "Stok Barang : ", "Terjual : "];
for ($i=0; $i < count($toko); $i++) { 
    echo "<p><b> Data ke-".$i."</b></p>";
    echo "<ul>";
    for ($j=0; $j < count($toko[$i]); $j++) { 
        echo "<li>".$inisial[$j].$toko[$i][$j]."</li>";
    }
    echo "</ul>";
}

echo "<br>";
for ($i=10; $i > 0 ; $i--) {
    for ($j=10; $j >= $i ; $j--) { 
        echo "*";
    }
    echo "<br>";
}

for ($a=10; $a > 0; $a--) { 
    for ($c=1; $c <= $a ; $c++) { 
        echo "&nbsp";
    }
    for ($b=10; $b>= $a ; $b--) { 
        echo "*";
    }
    echo "<br>";
}