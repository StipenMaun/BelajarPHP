<?php
session_start();
include "../../database.php";
$id_enc = $_GET["id"];
$id = base64_decode($id_enc);

$sql = mysqli_query($db, "DELETE FROM tbl_users WHERE id=$id");
if ($sql) {
    $pesan = "Hapus data user berhasil.";
} else {
    $pesan = "Hapus data user gagal.";
}

$_SESSION["pesan"] = $pesan;

header("Location: ../ ");