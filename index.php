<?php
require_once("connection.php");
$query = "SELECT * FROM barang";
$result = mysqli_query($mysqli, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko</title>
    <!-- memanggil bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Bootstap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Memanggil css external -->
    <link href="style.css" rel="stylesheet" />
    <!-- JavaScript -->
    <script type="text/javascript">
    function confirm_delete(){
        return confirm("Anda Yakin?");
    }
    </script>
</head>
<body>
    <!-- Header -->
    <?php
    require('navbar.php');
    ?>
    <div id="student-list">
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <h2>Daftar Data Barang</h2>
                </div>
                <div class="col text-end">
                    <a class="btn btn-primary" href="form_barang.php" role="button">Tambah Barang</a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Foto</th>
                                <th scope="col">ID Barang</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i =1;
                            foreach($result as $barang) {
                                if( is_null($barang['foto']) || empty($barang['foto']) ){
                                    $barang['foto'] = "penyimpanan/default.jpg";
                                }
                                echo 
                                '<tr>
                                    <th scope="row">' . $i++ .'</th>
                                    <td><img src="' . $barang["foto"]. '"/></td>
                                    <td>' . $barang["id_barang"]. '</td>
                                    <td>' . $barang["nama_barang"] . '</td>
                                    <td>' . $barang["harga"] .'</td>
                                    <td>
                                        <a href="form_edit.php?id_barang=' . $barang["id_barang"] . '">Edit</a>
                                        <a href="delete.php?id_barang=' .$barang["id_barang"] .'" onclick="return confirm_delete()">Delete</a>
                                    </td>
                                </tr>';
                            }
                            ?>
                        </tbody>
                    </table>

                </div>

            </div>

        </div>

    </div>
    
</body>
</html>