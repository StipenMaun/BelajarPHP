<?php
session_start();

unset($_SESSION["title"]); // kosongkan sesi title
unset($_SESSION["page"]); // kosongkan sesi page

if ($_GET["page"] == "dashboard") {
    $_SESSION["title"] = "Dashboard";
    $_SESSION["page"] = "dashboard.php";
    header("Location: ../");
} elseif ($_GET["page"] == "m_user") {
    $_SESSION["title"] = "Master User";
    $_SESSION["page"] = "users/users.php";
    header("Location: ../");
} elseif ($_GET["page"] == "m_user_edit") {
    $_SESSION["id_user"] = $_GET["id"];
    $_SESSION["title"] = "Master User Edit";
    $_SESSION["page"] = "aksi/edit_user.php";
    header("Location: ../");
} elseif ($_GET["page"] == "m_barang") {
    $_SESSION["title"] = "Master Barang";
    $_SESSION["page"] = "barang/data_barang.php";
    header("Location: ../");
} elseif ($_GET["page"] == "m_barang_edit") {
    $_SESSION["id_barang"] = $_GET["id"];
    $_SESSION["title"] = "Master Barang Edit";
    $_SESSION["page"] = "aksi/edit_barang.php";
    header("Location: ../");
} elseif ($_GET["page"] == "transaksi") {
    // $_SESSION["id_barang"] = $_GET["id"];
    $_SESSION["title"] = "Transaksi";
    $_SESSION["page"] = "transaksi/data_transaksi.php";
    header("Location: ../");
} elseif ($_GET["page"] == "trans_edit") {
    $_SESSION["id_transaksi"] = $_GET["id"];
    $_SESSION["title"] = "Transaksi Validasi";
    $_SESSION["page"] = "transaksi/trans_validasi.php";
    header("Location: ../");
} elseif ($_GET["page"] == "trans_detail") {
    $_SESSION["id_transaksi"] = $_GET["id"];
    $_SESSION["title"] = "Transaksi Detail - " . $_SESSION["id_transaksi"];
    $_SESSION["page"] = "transaksi/trans_detail.php";
    header("Location: ../");
}


?>