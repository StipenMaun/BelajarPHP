<?php

include "../database.php";
session_start();

if (isset($_POST["login"])) {
    $user = $_POST["username"]; // name input text
    $pswd = $_POST["password"]; // name input password
    $pass_hash = hash("sha256", $pswd);

    $sql = "SELECT * FROM tbl_users WHERE username='$user' AND password='$pass_hash'";

    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();

        if ($data["status"] == 0) {
            $_SESSION["pesan"] = "Akun Anda tidak aktif";
            header("Location: form_login.php");
        } else {
            if ($data["level"] == 1) {
                $_SESSION["level"] = 1;
                header("Location: ../Admin");
            } elseif ($data["level"] == 2) {
                $_SESSION["level"] = 2;
                header("Location: ../User");
            } else {
                $_SESSION["level"] = 3;
                header("Location: ../Owner");
            }
            $_SESSION["username"] = $data["username"];
            $_SESSION["THIS_ID"] = $data["id"];
            $_SESSION["is_login"] = true;
            $_SESSION["title"] = "Dashboard";
            $_SESSION["page"] = "dashboard.php";
        }
    } else {
        $_SESSION["pesan"] = "Akun Anda tidak terdaftar";
        header("Location: form_login.php");
    }

}
