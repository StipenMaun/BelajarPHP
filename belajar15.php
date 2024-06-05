<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_POST["nama"])) {
        echo $_POST["nama"];
    }
    ?>
    <form method="post" action="belajar15_2.php">
        <label for="nama">Masukkan Nama : </label>
        <input type="text" name="nama">
        <button type="submit">Kirim Data</button>
    </form>
</body>
</html>