<?php 
    require 'koneksi.php';

    $datamotor = query("SELECT * FROM listmotor");

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

    <style>
    input {
        position: absolute;
        top: 50%;
        left: 18%;
        transform: translate(-50%, -50%);
        color: black;
        font-size: 16px;
        background: transparent;
        width: 40px;
        height: 40px;
        padding: 10px;
        border: solid 2px #0096ff;
        outline: none;
        border-radius: 35px;
        transition: all 0.5s;
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 #f0f0f0;
    }

    input::placeholder {
        color: #666666;
        opacity: 0;
        transition: opacity 150ms ease-out;
    }

    input:focus::placeholder {
        opacity: 1;
    }

    input:hover {
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 #f9f9f9;
    }

    input:focus,
    input:not(:placeholder-shown) {
        width: 250px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 #f9f9f9;
    }
    </style>
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
                        <a class="nav-link" href="#srch">Search</a>
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
                <div class="searsh">
                    <input type="text" id="srch" placeholder="Search . . ." required>
                </div>
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
                <th scope="col">Merek Motor</th>
                <th scope="col">Nama Pemilik</th>
                <th scope="col">No. Plat</th>
                <th scope="col">Selanjutnya</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td></td>
                <td><a href="detail.php" style="color: #0096ff;">Lihat lebih detail</a>
                    <img class="float-end me-3"
                        src="https://img.icons8.com/material-rounded/24/000000/filled-trash.png" />
                </td>
            </tr>
        </tbody>
    </table>
    <!-- akhir tabel -->


    <!-- js boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>