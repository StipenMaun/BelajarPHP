<?php
include "../../database.php";
session_start();

$id = $_POST['id'];
$rand = rand();
$ekstensi = array('png', 'jpg', 'jpeg', 'gif');
$filename = $_FILES['foto']['name'];
$file_basename = substr($filename, 0, strripos($filename, '.')); // get file name
$file_ext = substr($filename, strripos($filename, '.')); // get file extention
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

$file1 = "../../assets/img/profil/" . $_SESSION['THIS_ID'] . "_" . $_SESSION['username'] . ".png";
$file2 = "../../assets/img/profil/" . $_SESSION['THIS_ID'] . "_" . $_SESSION['username'] . ".jpg";
$file3 = "../../assets/img/profil/" . $_SESSION['THIS_ID'] . "_" . $_SESSION['username'] . ".jpeg";
$file4 = "../../assets/img/profil/" . $_SESSION['THIS_ID'] . "_" . $_SESSION['username'] . ".gif";

if (!in_array($ext, $ekstensi)) {
    // JIKA EKSTENSI TIDAK SESUAI
    $_SESSION["alert"] = "Ekstensi tidak sesuai";
    header("Location: ../");
} else {
    // JIKA EKSTENSI SESUAI
    if ($ukuran < 1044070) {
        // JIKA UKURAN SESUAI
        $xx = $_SESSION["THIS_ID"] . "_" . $_SESSION["username"] . $file_ext;
        // JIKA FILE ADA MAKA HAPUS TERLEBIH DAHULU
        if (file_exists($file1) || file_exists($file2) || file_exists($file3) || file_exists($file4)) {
            unlink($file1);
            unlink($file2);
            unlink($file3);
            unlink($file4);
        }
        // PROSES UPLOAD FILE DAN UPDATE DATA KE DATABASE
        if (move_uploaded_file($_FILES['foto']['tmp_name'], '../../assets/img/profil/' . $xx)) {
            // JIKA BERHASIL UPLOAD
            mysqli_query($db, "UPDATE tbl_users SET foto='$xx' WHERE id='$id'");
            $_SESSION["alert"] = "Foto berhasil diupload";
            header("Location: ../");
        } else {
            // JIKA GAGAL UPLOAD
            $_SESSION["alert"] = "Gagal upload foto";
            header("Location: ../");
        }
    } else {
        // JIKA UKURAN TIDAK SESUAI
        $_SESSION["alert"] = "File terlalu besar";
        header("Location: ../");
    }
}