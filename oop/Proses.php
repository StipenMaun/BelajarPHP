<?php 
include "Database.php";
$db = new Database();

$aksi = (isset($_POST["action"])) ? $_POST["action"] : $_GET["action"];

if ($aksi == "tambah") {
    $table = $_POST["table"];
    $header = $_POST["header"];
    $data = $_POST["data"];
    $save = "'".implode("','",$data)."'";
    $db->input($table,$save,$header);
}elseif ($aksi == "hapus") {
    $id = $_GET["id"];
    $table = $_GET["table"];
    $key = $_GET["key"];
    $header = $_GET["header"];
    $where = $key."='".$id."'";
    $db->delete($table, $where, $header);
}elseif ($aksi == "edit") {
    $id = $_GET["id"];
    $table = $_GET["table"];
    $key = $_GET["key"];
    $header = $_GET["header"];
    $where = $key."='".$id."'";
    $db->edit($table, $where, $header);
}elseif ($aksi == "update") {
    $id = $_POST["id"];
    $table = $_POST["table"];
    $header = $_POST["header"];
    $key = $_POST["key"];
    $data = $_POST["data"];
    $where = $key."='".$id."'";
    $set = json_decode($_POST["set"]);
    $change = [];
    for ($i=0; $i < count($set); $i++) { 
        $change[]= $set[$i]."='".$data[$i]."'";
    }
    $db->update($table, implode("," , $change), $where, $header);
}else {
    echo "belum ada";
}



?>