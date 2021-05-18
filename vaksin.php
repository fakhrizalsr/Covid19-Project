<?php
$url = "http://vaksincovid19-api.vercel.app/api/vaksin";
$json = file_get_contents($url);
$data = json_decode($json, TRUE);
?>

<!doctype html>
<html lang="id">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <!-- Font -->
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

    <!-- Font Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/vaksin.css">

    <!-- Title -->
    <title>Data Vaksin | Covid-19 Project</title>
    <link rel="icon" href="assets/img/favicon.ico" type="image/ico" alt="Covid19-Project">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="assets/img/covid19project.png" alt="Covid19-Project" width="165" height="30">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/vaksin"><b>Data Vaksin</b></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End of Navbar -->

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container-fluid">
            <h1 class="display-4 text-center" style="margin-top: 20px;">Dashboard Vaksinasi</h1>
            <p class="lead text-center">Live Data Situasi Vaksinasi Covid-19 di Indonesia</p>
            <br>
        </div>
    </div>
    <!-- End of Jumbotron -->

    <!-- Dashboard Content -->
    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-3">
            <!-- Total Card -->
            <div class="col mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-text">Total Sasaran</h5>
                        <h2><b><?= $data['totalsasaran'] ?> &#128567; </b></h2>
                        <h6>Orang</h6>
                    </div>
                </div>
            </div>
            <!-- End Total Card -->
            <!-- Petugas Medis Card -->
            <div class="col mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-text">Sasaran Petugas Medis</h5>
                        <h2><b><?= $data['sasaranvaksinsdmk'] ?> <span>&#129333; </span><span>	&#9877;</span></b></h2>
                        <h6>Orang</h6>
                    </div>
                </div>
            </div>
            <!-- End Petugas Medis Card -->
            <!-- Petugas Publik Card -->
            <div class="col mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-text">Sasaran Petugas Publik</h5>
                        <h2><b><?= $data['sasaranvaksinpetugaspublik'] ?> &#128105; </b></h2>
                        <h6>Orang</h6>
                    </div>
                </div>
            </div>
            <!-- End Petugas Publik Card -->
            <!-- Lansia Card -->
            <div class="col mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-text">Sasaran Lansia</h5>
                        <h2><b><?= $data['sasaranvaksinlansia'] ?> &#129491; </b></h2>
                        <h6>Orang</h6>
                    </div>
                </div>
            </div>
            <!-- End of Lansia Card -->
            <!-- Vaksinasi 1 Card -->
            <div class="col mb-4">
                <div class="card text-white bg-success h-100">
                    <div class="card-body">
                        <h5 class="card-text">Vaksinasi 1</h5>
                        <h2><b><?= $data['vaksinasi1'] ?> &#x1F489; </b></h2>
                        <h6>Orang</h6>
                    </div>
                </div>
            </div>
            <!-- End Vaksinasi 1 Card -->
            <!-- Vaksinasi 2 Card -->
            <div class="col mb-4">
                <div class="card text-white bg-success h-100">
                    <div class="card-body">
                        <h5 class="card-text">Vaksinasi 2</h5>
                        <h2><b><?= $data['vaksinasi2'] ?> &#128137; </b></h2>
                        <h6>Orang</h6>
                    </div>
                </div>
            </div>
            <!-- End of Vaksinasi 2 Card -->
        </div>
    </div>
    <!-- End of Dashboard Content -->

    <!-- Footer -->
    <footer>
        <div class="text-center p-3">
            Made with &#10084; by
            <a class="text-dark" href="https://github.com/fakhrizalsr" target="_blank">fakhrizalsr</a>
        </div>
    </footer>
    <!-- End of Footer -->

    <!-- Scroll to Top Button -->
    <button type="button" id="btn-back-to-top">
        <b><i class="material-icons">arrow_upward</i></b>
    </button>
    <!-- End of Scroll to Top Button -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Back to Top JS -->
    <script src="assets/js/btnbacktotop.js"></script>

</html>