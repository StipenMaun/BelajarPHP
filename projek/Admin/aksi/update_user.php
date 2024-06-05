<?php
include "../../database.php";
session_start();

$pesan = "";

if (isset($_POST["submit"])) {
    $user = $_POST["user"];
    $pswd = $_POST['pswd'];
    $level = $_POST["level"];
    $pass_hash = hash("sha256", $pswd);
    $id = $_POST["id"];

    try {
        $sql = mysqli_query($db, "UPDATE tbl_users SET username='$user', password='$pass_hash', level='$level' WHERE id='$id'");

        if ($sql) {
            $pesan = "Update data user berhasil.";
        } else {
            $pesan = "Update data user gagal.";
        }
    } catch (Exception $e) {
        $pesan = "Silakan input yang lain. Username sudah ada.";
    }

    unset($_SESSION["title"]); // kosongkan sesi title
    unset($_SESSION["page"]); // kosongkan sesi page
    $_SESSION["title"] = "Master User";
    $_SESSION["page"] = "users/users.php";
    $_SESSION["pesan"] = $pesan;
    header("Location: ../");
}

?>