<?php

$mhs = [
    [
        "nama" => "Del Piero",
        "nim" => "464545646",
        "jurusan" => "Manajemen Informatika",
        "hobi" => "Sepak Bola"
    ],
    [
        "nama" => "Mozzart",
        "nim" => "168565464",
        "jurusan" => "Administrasi Bisnis",
        "hobi" => "Main alat musik"
    ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($mhs as $row) : ?>
        <a href="belajar14_2.php?nama=<?= $row['nama']?>&nim=<?= $row['nim']?>&jurusan=<?= $row['jurusan']?>&hobi=<?= $row['hobi']?>">
            <?= $row["nama"]?>
        </a><br>
    <?php endforeach; ?>
</body>
</html>