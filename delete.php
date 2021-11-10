<?php
require_once("connection.php");

//Mendapatkan Data ID Barang
if( isset($_GET["id_barang"])) $id_barang = $_GET["id_barang"];
else{
    echo "ID Barang tidak ditemukan <a href='index.php'>Kembali</a>";
    exit();
}

//Query Get Data Barang
$query = "DELETE FROM barang WHERE id_barang = '{$id_barang}'";

//Eksekusi Query
$result = mysqli_query($mysqli, $query);

if( !$result ){
    exit("Gagal Menghapus Data");
}

header("Location: index.php");

?>