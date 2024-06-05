<?php

$bulan = date("m");
// $bulan = 13;

switch($bulan){
    case 1:
        $bulan = "Januari";
        break;
    case 2:
        $bulan = "Februari";
        break;
    case 3:
        $bulan = "Maret";
        break;
    case 4:
        $bulan = "April";
        break;
    case 5:
        $bulan = "Mei";
        break;
    case 6:
        $bulan = "Juni";
        break;
    case 7:
        $bulan = "Juli";
        break;
    case 8:
        $bulan = "Agustus";
        break;
    case 9:
        $bulan = "September";
        break;
    case 10:
        $bulan = "Oktober";
        break;
    case 11:
        $bulan = "November";
        break;
    case 12:
        $bulan = "Desember";
        break;
    default:
    // date("F") memanggil nama bulan saat ini dalam bahasa Inggris
        $bulan = date("F");
        break;
}

$hari = date("w");

switch ($hari) {
    case 0:
        $hari = "Minggu";
        break;
    case 1:
        $hari = "Senin";
        break;
    case 2:
        $hari = "Selasa";
        break;
    case 3:
        $hari = "Rabu";
        break;
    case 4:
        $hari = "Kamis";
        break;
    case 5:
        $hari = "Jum'at";
        break;
    case 6:
        $hari = "Sabtu";
        break;
    
    default:
    // date("l") untuk menampilkan nama hari saat ini dalam bahasa Inggris
        $hari = date("l");
        break;
}

echo $hari . ", " . date("d") . " " . $bulan . " " . date("Y");