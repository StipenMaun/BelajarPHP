<?php
/*
LOOPING
** WHILE => ketika
** DO WHILE => lakukan ketika
*/

// WHILE
$i = 1;
while ($i <= 10) {
    echo $i;
    $i++;
}

echo "<br>";
// DO WHILE
$a = 1;
do {
    echo "Ini data ke-".$a . "<br>";
    $a++;
} while ($a <= 10);

echo "<br>";

$b = 1;
do {
    if($b == 5) break;
    echo "Ini data ke-".$b . "<br>";
    $b++;
} while ($b <= 10);

echo "<br>";

$c = 0;
do {
    $c++;
    if($c == 5) continue;
    echo "Ini data ke-".$c . "<br>";
} while ($c < 10);


$d = 0;

while($d < 100){
    $d += 10;
    echo $d ."<br>";
}





