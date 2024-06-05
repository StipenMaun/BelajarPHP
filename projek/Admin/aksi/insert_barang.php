<?php
include "../../database.php";
session_start();

$pesan = "";

if (isset($_POST["submit"])) {
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $harga = $_POST["harga"];
    $qty = $_POST["qty"];

    try {
        $sql = mysqli_query($db, "INSERT INTO tbl_barang(id_barang, nama_barang, harga_satuan, qty) VALUES('$id','$nama', $harga, '$qty')");

        if ($sql) {
            $pesan = "Insert data barang berhasil.";
        } else {
            $pesan = "Insert data barang gagal.";
        }
    } catch (Exception $e) {
        $pesan = "Ada kesalahan pada query atau struktur table";
    }

    $_SESSION["pesan"] = $pesan;
    header("Location: ../ ");
}

?>