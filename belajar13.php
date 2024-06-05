<?php
/**
 * GET
 * POST
 * 
 */

 // SUPERGLOBALS
 // $_GET
 // $_POST
 // $_SESSION
 // $_COOKIE
 // $_SERVER
 // $_REQUEST
 // $_ENV
// menggunakan array assosiative

// var_dump($_SERVER);
// echo $_SERVER["SERVER_NAME"];

// $_GET["nama"] = "Alexander Jimi";
// var_dump($_GET);

// jika tidak ada
if(!isset($_GET["nama"]) || !isset($_GET["kelas"])){
    // redirect
    header("Location: belajar13_2.php");
    exit;
}

echo "Nama : " . $_GET["nama"] . "<br>";
echo "Kelas : " . $_GET["kelas"] . "<br>";
