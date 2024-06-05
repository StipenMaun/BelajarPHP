<?php 
include "Database.php";
$db = new Database();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Data Barang</title>
</head>
<body>
    <h1>Data Barang</h1>
    <a href="Form_input_barang.php">Tambah Barang</a>
    <table border="1" cellspacing="0" cellpadding="3">
        <tr>
            <th>No</th>
            <th>ID Barang</th>
            <th>Nama Barang</th>
            <th>QTY</th>
            <th>Harga Satuan</th>
            <th colspan="2">Action</th>
        </tr>
        <?php 
        $no = 1;
        foreach ($db->getData("tbl_barang") as $row):
        ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row["id_barang"]?></td>
                <td><?= $row["nama_barang"]?></td>
                <td><?= $row["qty"]?></td>
                <td><?= $row["harga_satuan"]?></td>
                <td>
                    <a href="Proses.php?action=edit&id=<?= $row["id_barang"]?>&table=tbl_barang&key=id_barang&header=Form_edit_barang">Edit</a>
                </td>
                <td>
                    <a href="Proses.php?action=hapus&id=<?= $row["id_barang"]?>&table=tbl_barang&key=id_barang&header=Tampil_barang">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <?php if (isset($_SESSION["pesan"])): ?>
        <script>
            alert("<?php echo $_SESSION["pesan"] ?>");
        </script>
    <?php
    endif;
    session_unset();
    ?>
</body>
</html>