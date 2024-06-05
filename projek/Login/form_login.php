<?php

session_start();

// jika is_login true (statusnya masih login)
if (isset($_SESSION["is_login"])) {
    if ($_SESSION["level"] == 1) {
        header("Location: ../Admin");
    }elseif ($_SESSION["level"] == 2) {
        header("Location: ../User");
    }else {
        header("Location: ../Owner");
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" href="../layout/login/css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>
    <div class="kotak" data-aos="fade-down">
        <form action="login_setting.php" method="POST">
            <table>
                <tr>
                    <td colspan="3" align="center">
                        <h1>Login</h1>
                    </td>
                </tr>
                <tr>
                    <td><label for="username">Username</label></td>
                    <td>:</td>
                    <td>
                        <input type="text" name="username" id="username">
                    </td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td>:</td>
                    <td>
                        <input type="password" name="password" id="password">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="submit" value="Login" name="login">
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <?php
    if (isset($_SESSION["pesan"])) {
        echo $_SESSION["pesan"];
        session_unset();
        exit;
    }
    ?>

    <script>
    AOS.init({
        delay:50,
        duration:1000,
        easing:"ease-in-back"
    });
    </script>
</body>
</html>