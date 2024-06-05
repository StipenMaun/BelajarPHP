<?php
include "../../database.php";
session_start();

$pesan = "";

if (isset($_POST["submit"])) {
    $user = $_POST["user"];
    $pswd = $_POST['pswd'];
    $level = $_POST["level"];
    $pass_hash = hash("sha256", $pswd);

    try {
        $sql = mysqli_query($db, "INSERT INTO tbl_users(username, password, level, status) VALUES('$user','$pass_hash', $level, 1)");

        if ($sql) {
            $pesan = "Insert data user berhasil.";
        } else {
            $pesan = "Insert data user gagal.";
        }
    } catch (Exception $e) {
        $pesan = "Silakan input yang lain. Username sudah ada.";
    }

    $_SESSION["pesan"] = $pesan;
    header("Location: ../ ");
}

?>