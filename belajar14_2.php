<?php
if (!isset($_GET["nama"]) || !isset($_GET["nim"]) || !isset($_GET["jurusan"]) || !isset($_GET["hobi"]) ) {
    // redirect
    header("Location: belajar14.php");
    exit;
}
?>
Nama : <?= $_GET["nama"] ?><br>
NIM : <?= $_GET["nim"] ?><br>
Jurusan : <?= $_GET["jurusan"] ?><br>
Hobi : <?= $_GET["hobi"] ?><br>
<a href="belajar14.php">Kembali</a>