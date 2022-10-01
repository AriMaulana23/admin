<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
  require 'koneksi.php';
  $motor = query("SELECT * FROM listmotor");

?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard</title>

        <!-- link boostrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <!-- akhir link boostrap -->

    </head>

    <body id="home" style="height: 2000px;">

        <!-- navbar -->
        <nav class="navbar navbar-expand-lg bg-transparent fixed-top shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto me-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#search">Search</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tambah">Tambah</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--akhir navbar  -->

        <!-- judul -->
        <div class="d-block container-fluid" style="height: 50px;"></div>
        <h1 class="container mt-5" style="font-family: monospace;">Motorcycle Data</h1>
        <!-- akhir judul -->

        <!-- navbar header -->
        <nav class="navbar bg-transparent mb-3" style="margin-top: 40px;">
            <div class="container">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" id="search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <a class="btn text-light" href="tambahdata.php" id="tambah" role="button"
                    style="background-color: #293462;">Tambah data</a>
            </div>
        </nav>
        <!-- akhir navbar header -->

        <!-- tabel -->
        <table class="table table-bordered container">
            <thead>
                <tr>
                    <th scope="col">Nama Motor</th>
                    <th scope="col">No. Plat</th>
                    <th scope="col">Tipe Motor</th>
                    <th scope="col">Selanjutnya</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach( $motor as $mtr ) : ?>
                <tr>
                    <td><?= $mtr["nama_motor"]; ?></td>
                    <td><?= $mtr["no_plat"]; ?></td>
                    <td>Matic</td>
                    <th><a href="detail.php">Lihat lebih detail</a><img class="float-end me-3"
                            src="https://img.icons8.com/material-rounded/24/000000/filled-trash.png" /></th>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <!-- akhir tabel -->


        <!-- js boostrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
    </body>

    </html>
</body>

</html>