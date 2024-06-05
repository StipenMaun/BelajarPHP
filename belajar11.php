<?php
/**
 * Math Function
 * - floor
 * - round
 * - rand
 * - pow
 */

 // rand
 // fungsinya untuk membuat int random
 echo rand()."<br>";
 echo rand()."<br>";
 echo rand(1, 100)."<br>";

 // pow
 // pemangkatan angka
 echo pow(3,3)."<br>"; // 27
 echo pow(-2,3)."<br>"; // -8

 // round
 // pembulatan berdasarkan angka belakang koma
 echo round(1.67)."<br>"; // 2
 echo round(1.47)."<br>"; // 1

 // floor
 // pembulatan dengan meniadakan angka belakang koma
 echo floor(0.68)."<br>"; // 0
 echo floor(5.1)."<br>"; // 5
 echo floor(-5.1)."<br>"; // -6