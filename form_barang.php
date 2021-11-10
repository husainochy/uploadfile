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
</head>
<body>
    <!-- Header -->
    <?php
    require('navbar.php');
    ?>
   <div id="form" class="pt-5">

        <div class="container">

            <div class="row d-flex justify-content-center">

                <div class="col col-8 p-4 bg-light">

                    <form action="action.php" method="POST" enctype="multipart/form-data">

                         <div class="form-group mb-2">
                            <label for="foto">Foto</label>
                            <input name="foto" id="foto" class="form-control" type="file">
                        </div>

                        <div class="form-group mb-2">
                            <label for="name">ID Barang</label>
                            <input name="id_barang" id="nis" class="form-control" type="text" placeholder="ID Barang" required>
                        </div>

                        <div class="form-group mb-2">
                            <label for="name">Nama Barang</label>
                            <input name="nama_barang" id="name" class="form-control" type="text" placeholder="Nama Barang" required>
                        </div>
                        <div class="form-group mb-2">
                            <label for="harga">Harga Barang</label>
                            <input name="harga" id="harga" class="form-control" type="number" placeholder="Harga Barang" required>
                        </div>
                        <input name="submit" type="submit" value="Kirim" class="btn btn-primary ">

                    </form>

                </div>

            </div>

        </div>

    </div>
    
</body>
</html>