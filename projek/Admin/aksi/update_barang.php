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
        $sql = mysqli_query($db, "UPDATE tbl_barang SET nama_barang='$nama', harga_satuan='$harga', qty='$qty' WHERE id_barang='$id'");

        if ($sql) {
            $pesan = "Update data barang berhasil.";
        } else {
            $pesan = "Update data barang gagal.";
        }
    } catch (Exception $e) {
        $pesan = "Ada kesalahan pada query atau struktur table";
    }

    unset($_SESSION["title"]); // kosongkan sesi title
    unset($_SESSION["page"]); // kosongkan sesi page
    $_SESSION["title"] = "Master Barang";
    $_SESSION["page"] = "barang/data_barang.php";
    $_SESSION["pesan"] = $pesan;
    header("Location: ../");
}

?>