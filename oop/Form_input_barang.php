<?php 
include "Database.php";
$db = new Database();

$kode = $db->getKodeBaru("tbl_barang", "id_barang", "BR");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Barang</title>
</head>
<body>
    <h1>Form Input Barang</h1>
    <form action="Proses.php" method="post">
        <input type="hidden" name="action" id="action" value="tambah">
        <input type="hidden" name="table" id="table" value="tbl_barang">
        <input type="hidden" name="header" id="header" value="Tampil_barang.php">
        <table>
            <tr>
                <td>ID Barang</td>
                <td><input type="text" name="data[]" id="id" value="<?= $kode ?>" readonly></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="data[]" id="nama"></td>
            </tr>
            <tr>
                <td>Harga Satuan</td>
                <td><input type="number" name="data[]" id="harga"></td>
            </tr>
            <tr>
                <td>QTY</td>
                <td><input type="number" name="data[]" id="qty"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>