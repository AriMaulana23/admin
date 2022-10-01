<?php 
  if ( isset($_POST["submit"]) ) {
    if ( $_POST['nama'] == "Ari Maulana" && $_POST['password'] == "ari123" ) {
      header("Location: dashboard.php");
      exit;
    } else if ( $_POST['nama'] == "" && $_POST['password'] == "" ) {
      $errorEmpty = true;
    } else {
      $error = true;
    }
  }
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body class="container-fluid d-block ps-0" style="background-color: #3A3845;">

    <div class="d-flex justify-content-start" id="component2">
        <img class="animate__animated animate__fadeInTopLeft" src="img/Component2.png">
    </div>

    <div class="position-absolute top-50 start-50 translate-middle">
        <center>
            <form class="pb-3" action="" method="post">
                <div class="mb-4 text-light">
                    <h1 class="animate__animated animate__fadeInDown">Login</h1>
                </div>
                <div class="mb-3 animate__animated animate__fadeIn">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama"
                        style="width: 200px;">
                </div>
                <div class="mb-3 animate__animated animate__fadeIn">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                        style="width: 200px;">
                </div>

                <button type="submit" class="btn btn-primary animate__animated animate__slideInUp"
                    name="submit">Masuk</button>
            </form>

            <div>
                <a href="buatakun.php">Buat akun</a>
            </div>

            <?php if ( isset($error) ) : ?>
            <p class=" text-danger fst-italic animate__animated animate__shakeX">Nama atau password salah!</p>
            <?php endif; ?>

            <?php if ( isset($errorEmpty) ) : ?>
            <p class=" text-warning fst-italic animate__animated animate__shakeX">Nama atau password tidak boleh kosong!
            </p>
            <?php endif; ?>
        </center>
    </div>


    <div class="position-absolute bottom-0 end-0">
        <img class="animate__animated animate__rotateInDownRight" src="img/Component1.png" style="color: yellow;">
    </div>

    <!-- js boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <!-- js boostrap -->
</body>

</html>