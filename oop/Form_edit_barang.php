<?php 
include "Database.php";
$db = new Database();

$data = $_SESSION["data"];

$keyArray = array('nama_barang','harga_satuan','qty');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Barang</title>
</head>
<body>
    <h1>Form Edit Barang</h1>
    <form action="Proses.php" method="post">
        <input type="hidden" name="action" id="action" value="update">
        <input type="hidden" name="table" id="table" value="tbl_barang">
        <input type="hidden" name="header" id="header" value="Tampil_barang.php">
        <input type="hidden" name="key" id="key" value="id_barang">
        <input type="hidden" name="set" id="set" value='<?php echo json_encode($keyArray) ?>'>
        <table>
            <tr>
                <td>ID Barang</td>
                <td><input type="text" name="id" id="id" value="<?= $data['id_barang']?>" readonly></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="data[]" id="nama" value="<?= $data['nama_barang']?>"></td>
            </tr>
            <tr>
                <td>Harga Satuan</td>
                <td><input type="number" name="data[]" id="harga" value="<?= $data['harga_satuan']?>"></td>
            </tr>
            <tr>
                <td>QTY</td>
                <td><input type="number" name="data[]" id="qty" value="<?= $data['qty']?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>