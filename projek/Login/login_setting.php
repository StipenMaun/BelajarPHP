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
        }else {
            if($data["level"] == 1){
                $_SESSION["username"] = $data["username"];
                $_SESSION["is_login"] = true;
                $_SESSION["level"] = 1;
                $_SESSION["title"] = "Dashboard";
                $_SESSION["page"] = "dashboard.php";
                header("Location: ../Admin");
            }elseif ($data["level"] == 2) {
                $_SESSION["username"] = $data["username"];
                $_SESSION["is_login"] = true;
                $_SESSION["level"] = 2;
                $_SESSION["title"] = "Dashboard";
                $_SESSION["page"] = "dashboard.php";
                header("Location: ../User");
            }else {
                $_SESSION["username"] = $data["username"];
                $_SESSION["is_login"] = true;
                $_SESSION["level"] = 3;
                $_SESSION["title"] = "Dashboard";
                $_SESSION["page"] = "dashboard.php";
                header("Location: ../Owner");
            }
        }
    }else {
        $_SESSION["pesan"] = "Akun Anda tidak terdaftar";
        header("Location: form_login.php");
    }
    
}



?>