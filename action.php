<?php
require_once("connection.php");

//status tidak error
$error = 0;

//memvalidasi inputan
if( isset($_POST['id_barang']) ) $id_barang = $_POST['id_barang'];
else $error = 1; //status error

if( isset($_POST['nama_barang']) ) $nama_barang = $_POST['nama_barang'];
else $error = 1; //status error

if( isset($_POST['harga']) ) $harga = $_POST['harga'];
else $error = 1; //status error


//Mengatasi jika terdapat error pada input
if($error == 1){
    echo "Terjadi Kesalahan pada proses input data";
    exit();
}
//Mengambil Data File Upload
$files = $_FILES['foto'];
$path = "penyimpanan/";

//Menangani File Upload
if( !empty($files['name'])){
    $filepath = $path. $files["name"];
    $upload = move_uploaded_file($files["tmp_name"], $filepath);
}
else{
    $filepath = "";
    $upload = false;
}
//Menangani error saat mengupload namun tetap memberikan gambar default
if( !$upload && $filepath == ''){
    $filepath = $path."default.jpg";
}

//Menyiapkan Query MySQL untuk dieksekusi
$query = "INSERT INTO barang(id_barang, harga, nama_barang, foto)
VALUES
('{$id_barang}','{$harga}','{$nama_barang}','{$filepath}');";

//Mengeksekusi MySQL Query
$insert = mysqli_query($mysqli, $query);

//Menangani  ketika error pada saat eksekusi query
if( $insert == 0 ){
    echo "Error dalam menambahkan data. <a href='index.php'>Kembali</a>";
}else{
    header("Location: index.php");
}

?>