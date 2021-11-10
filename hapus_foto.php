<?php

require_once("connection.php");

//Mendapatkan Data NIS
if( isset($_GET["id_barang"])) $id_barang = $_GET["id_barang"];
else{
    echo "ID Barang Tidak Ditemukan! <a href='index.php'>Kembali</a>";
    exit();
}

//Query Get Data Siswa
$query = "SELECT * FROM barang WHERE id_barang = '{$id_barang}'";

//Eksekusi Query
$result = mysqli_query($mysqli, $query);

//Fetching Data
foreach( $result as $barang){
    $foto = $barang["foto"];
}

if( !is_null($foto) && !empty($foto) ){
    $remove = unlink($foto);

    if($remove){
        //Menyiapkan Query MySQL untuk dieksekusi
        $query = "UPDATE barang SET foto = NULL WHERE id_barang = '{$id_barang}'";

        //Mengeksekusi Query
        $insert = mysqli_query($mysqli, $query);
    }
}

header("Location: form_edit.php?id_barang={$id_barang}");
?>