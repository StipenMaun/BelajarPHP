<?php

$username = "root";
$hostname = "localhost";
$password = "";
$dbname = "mi_jualan";

// melakukan koneksi dengan database
$db = mysqli_connect($hostname, $username, $password, $dbname);

if ($db->connect_error) {
    echo "Koneksi gagal";
    die();
}


function getKodeBaru($db, $table, $col, $unik)
{
    $sql = mysqli_query($db, "SELECT max($col) as kode FROM $table");
    $data = mysqli_fetch_array($sql);
    $kode = $data["kode"];
    $urutan = (int) substr($kode, 3, 3);
    $urutan++;
    $huruf = $unik;
    $kode = $huruf . sprintf("%03s", $urutan);
    return $kode;
}