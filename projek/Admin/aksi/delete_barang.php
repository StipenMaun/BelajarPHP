<?php
session_start();
include "../../database.php";

$id = $_GET["id"];

$sql = mysqli_query($db, "DELETE FROM tbl_barang WHERE id_barang='$id'");
if ($sql) {
    $pesan = "Hapus data barang berhasil.";
} else {
    $pesan = "Hapus data barang gagal.";
}

$_SESSION["pesan"] = $pesan;

header("Location: ../ ");