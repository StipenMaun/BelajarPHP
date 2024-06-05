<?php

class Database{
    protected $host = "localhost";
    protected $user = "root";
    protected $pswd = "";
    protected $dbase = "mi_jualan";
    public $db;

    public function __construct()
    {
        $this->db = mysqli_connect($this->host, $this->user, $this->pswd,$this->dbase);
        session_start();

        // cek koneksi
        // if($this->db){
        //     echo "koneksi sukses";
        // }else {
        //     echo "koneksi gagal";
        // }
    }

    public function getData($table)
    {
        $data = mysqli_query($this->db, "SELECT * from $table");
        $hasil = [];
        while($x = mysqli_fetch_array($data)){
            $hasil[] = $x;
        }
        return $hasil;
    }

    public function input($table, $data, $header)
    {
        $date = date("Y-m-d H:i:s");
        $sql = mysqli_query($this->db, "INSERT INTO $table VALUES($data,'$date')");
        if ($sql) {
            $_SESSION["pesan"] = "Data berhasil ditambah";
            header("Location: $header"); // menuju tampilan tujuan
        }else {
            echo mysqli_error($this->db); // tampilkan error
        }
    }

    public function delete($table, $where, $header)
    {
        $sql = mysqli_query($this->db, "DELETE from $table where $where");
        if ($sql) {
            $_SESSION["pesan"] = "Data berhasil dihapus";
            header("Location: $header.php"); // menuju tampilan tujuan
        }else {
            echo mysqli_error($this->db); // tampilkan error
        }
    }

    public function edit($table, $where, $header)
    {
        $sql = mysqli_query($this->db, "SELECT * FROM $table where $where");
        if ($sql) {
            $_SESSION["data"] = mysqli_fetch_array($sql);
            header("Location: $header.php"); // menuju tampilan tujuan
        }else {
            echo mysqli_error($this->db); // tampilkan error
        }
    }

    public function update($table, $set, $where, $header)
    {
        $sql = mysqli_query($this->db, "UPDATE $table set $set where $where");
        if ($sql) {
            $_SESSION["pesan"] = "Data berhasil diubah";
            header("Location: $header"); // menuju tampilan tujuan
        }else {
            echo mysqli_error($this->db); // tampilkan error
        }
    }

    public function getKodeBaru($table, $col, $unik)
    {
        $sql = mysqli_query($this->db, "SELECT max($col) as kode FROM $table");
        $data = mysqli_fetch_array($sql);
        $kode = $data["kode"];
        $urutan = (int) substr($kode, 3, 3);
        $urutan++;
        $huruf = $unik;
        $kode = $huruf . sprintf("%03s", $urutan);
        return $kode;
    }

}

