<?php
$url = "http://vaksincovid19-api.vercel.app/api/vaksin";
$json = file_get_contents($url);
$data = json_decode($json, TRUE);
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Font -->
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/stylevaksin.css">

    <!-- Title -->
    <title>Data Vaksin | Covid-19 Project</title>
    <link rel="icon" href="assets/img/favicon.ico" type="image/ico">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="/Covid19-Project">Navbar w/ text</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/Covid19-Project">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="vaksin.php"><b>Data Vaksin</b></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End of Navbar -->

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4 text-center" style="margin-top: 20px;">Dashboard Vaksinasi</h1>
            <p class="lead text-center">Live Data Situasi Vaksinasi Covid-19 di Indonesia</p>
            <br>
        </div>
    </div>
    <!-- End of Jumbotron -->

    <!-- Dashboard Content -->
    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-3">
            <!-- Confirmed Card -->
            <div class="col mb-4">
                <div class="card bg-light h-100 w-100">
                    <div class="card-body">
                        <h5 class="card-text">Total Sasaran</h5>
                        <h2><b><?= $data['totalsasaran'] ?></b></h2>
                        <h6>Orang</h6>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card bg-light h-100 w-100">
                    <div class="card-body">
                        <h5 class="card-text">Sasaran Petugas Medis</h5>
                        <h2><b><?= $data['sasaranvaksinsdmk'] ?></b></h2>
                        <h6>Orang</h6>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card bg-light h-100 w-100">
                    <div class="card-body">
                        <h5 class="card-text">Sasaran Petugas Publik</h5>
                        <h2><b><?= $data['sasaranvaksinpetugaspublik'] ?></b></h2>
                        <h6>Orang</h6>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card bg-light h-100 w-100">
                    <div class="card-body">
                        <h5 class="card-text">Sasaran Lansia</h5>
                        <h2><b><?= $data['sasaranvaksinlansia'] ?></b></h2>
                        <h6>Orang</h6>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card bg-light h-100 w-100">
                    <div class="card-body">
                        <h5 class="card-text">Vaksinasi 1</h5>
                        <h2><b><?= $data['vaksinasi1'] ?></b></h2>
                        <h6>Orang</h6>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card bg-light h-100 w-100">
                    <div class="card-body">
                        <h5 class="card-text">Vaksinasi 2</h5>
                        <h2><b><?= $data['vaksinasi2'] ?></b></h2>
                        <h6>Orang</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Dashboard Content -->


    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>