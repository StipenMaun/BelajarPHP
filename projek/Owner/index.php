<?php 
session_start();

if (isset($_SESSION["is_login"])) {
    if ($_SESSION["level"] != 3) {
        header("Location: ../Login/form_login.php");
    }else{
        $username = $_SESSION["username"];
    }
}else {
    header("Location: ../Login/form_login.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Owner</title>
</head>
<body>
    <h1>Selamat Datang <?= $username ?></h1>
    <form action="../Login/logout_setting.php" method="post">
        <input type="submit" value="Logout" name="logout">
    </form>
</body>
</html>
