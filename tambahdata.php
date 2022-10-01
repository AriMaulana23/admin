<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TambahData</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@1,500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
    #namamotor,
    #noplat,
    #tipe {
        width: 300px;
    }

    .bt1 {
        background-color: #0096FF;
        width: 100px;
        margin-left: 12px;
    }

    .tmbh {
        font-family: 'Rubik', sans-serif;
    }

    .contain {
        background-color: #F9F9F9;
        display: block;
        width: 900px;
        height: 570px;
        margin-top: 30px;
        margin-bottom: auto;
        border-radius: 20px;
    }
    </style>
</head>

<body style="background-color: #efefef;">


    <div class="contain container shadow">
        <div class="position-absolute top-50 start-50 translate-middle">
            <form method="post">
                <div class="mb-5 text-center">
                    <h1 class="tmbh">Tambah data Sepeda Motor</h1>
                </div>

                <div class="row align-items-center">
                    <div class="row">
                        <!-- 1 -->
                        <div class="col mb-3">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="namamotor" placeholder="No. STNK">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="namamotor" placeholder="Merek Motor">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="namamotor" placeholder="Nama Pemilik">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="namamotor" placeholder="Alamat Pemilik">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="namamotor"
                                    placeholder="No. Plat / No. Registrasi">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="namamotor" placeholder="Tipe Kendaraan">
                            </div>
                        </div>
                        <!-- end 1 -->

                        <!-- 2 -->
                        <div class="col mb-3">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="namamotor" placeholder="Warna Sepeda Motor">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="namamotor" placeholder="Kapasitas Mesin">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="namamotor" placeholder="Tahun Pembuatan">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="namamotor" placeholder="No. Mesin">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="namamotor" placeholder="No. Rangka">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="namamotor" placeholder="No. BPKB">
                            </div>
                        </div>
                        <!-- end 2 -->
                    </div>

                    <button type="submit" class="bt1 btn btn-primary text-light">Tambah</button>
                    <a class="bt2 btn btn-danger text-light" href="dashboard.php" style="background-color: #FF5677;
                    width: 100px; margin-left: 12px;">Batal</a>
            </form>
        </div>
    </div>


    <!-- j bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>