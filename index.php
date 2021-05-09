<?php
// APIs
$url = "https://covid19.mathdro.id/api/countries/Indonesia/confirmed";
$url2 = "https://api.kawalcorona.com/indonesia/provinsi";
$url3 = "https://covid19.mathdro.id/api";
$url4 = "https://api.kawalcorona.com/";
$json = file_get_contents($url);
$json2 = file_get_contents($url2);
$json3 = file_get_contents($url3);
$json4 = file_get_contents($url4);
$data = json_decode($json, TRUE);
$data2 = json_decode($json2, TRUE);
$data3 = json_decode($json3, TRUE);
$data4 = json_decode($json4, TRUE);
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <!-- Font -->
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/home.css">

    <!-- Title -->
    <title>Home | Covid-19 Project</title>
    <link rel="icon" href="assets/img/favicon.ico" type="image/ico">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="/index.php">
                <img src="assets/img/covid19project.png" alt="" width="165" height="30">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/index.php"><b>Home</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="vaksin.php">Data Vaksin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End of Navbar -->

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4 text-center" style="margin-top: 20px;">Dashboard Coronavirus</h1>
            <p class="lead text-center">Live Data Kasus Covid-19 di Indonesia</p>
            <br>
        </div>
    </div>
    <!-- End of Jumbotron -->

    <!-- Dashboard Content -->
    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-4">
            <!-- Confirmed Card -->
            <div class="col mb-4">
                <div class="card text-white bg-danger h-100 w-100">
                    <div class="card-body">
                        <h5 class="card-text">Positif</h5>
                        <h2><b><?= $data[0]['confirmed'] ?> &#128532;</b></h2>
                        <h6>Orang</h6>
                    </div>
                </div>
            </div>
            <!-- End of Confirmed Card -->
            <!-- Active Card -->
            <div class="col mb-4">
                <div class="card h-100 w-100">
                    <div class="card-body">
                        <h5 class="card-text" style="color: gray;">Aktif</h5>
                        <h2 style="color: gray;"><b><?= $data[0]['active'] ?> &#128543;</b></h2>
                        <h6 style="color: gray;">Orang</h6>
                    </div>
                </div>
            </div>
            <!-- End of Active Card -->
            <!-- Recovered Card -->
            <div class="col mb-4">
                <div class="card text-white bg-success h-100 w-100">
                    <div class="card-body">
                        <h5 class="card-text">Sembuh</h5>
                        <h2><b><?= $data[0]['recovered'] ?> &#128512;</b></h2>
                        <h6>Orang</h6>
                    </div>
                </div>
            </div>
            <!-- End of Recovered Card -->
            <!-- Deaths Card -->
            <div class="col mb-4">
                <div class="card text-white bg-dark h-100 w-100">
                    <div class="card-body">
                        <h5 class="card-text">Meninggal</h5>
                        <h2><b><?= $data[0]['deaths'] ?> &#128557;</b></h2>
                        <h6>Orang</h6>
                    </div>
                </div>
            </div>
            <!-- End of Deaths Card -->
        </div>
        <!-- Last Update-->
        <p class="lead text-center">Update terakhir : <?php $timestamp = $data[0]["lastUpdate"];
                                                        echo date('d-m-Y H:i:s', $timestamp / 1000); ?> WIB </p>
    </div>
    <!-- End of Dashboard Content -->

    <!-- Dashboard Content-->
    <div class="container-fluid">
        <!-- Card -->
        <div class="card">
            <div class="card-header bg-transparent">
                <b>Data Kasus Covid-19 Berdasarkan Provinsi</b>
            </div>
            <!-- Table -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th style="text-align: left" scope="col">Provinsi</th>
                                <th scope="col">Positif</th>
                                <th scope="col">Sembuh</th>
                                <th scope="col">Meninggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $a = 1;
                            foreach ($data2 as $prov) :
                            ?>
                                <tr>
                                    <td><?= $a++ ?></td>
                                    <td style="text-align: left"><?= $prov['attributes']['Provinsi']; ?></td>
                                    <td><?= $prov['attributes']['Kasus_Posi']; ?></td>
                                    <td><?= $prov['attributes']['Kasus_Semb']; ?></td>
                                    <td><?= $prov['attributes']['Kasus_Meni']; ?></td>
                                </tr>
                            <?php
                            endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- End of Table -->
            </div>
        </div>
        <!-- End of Card -->
    </div>
    <!-- End of Dashboard Content -->
    <br>

    <!-- Dashboard Content -->
    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-md-1 row-cols-lg-1 row-cols-xl-2 g-4">
            <!-- Card Content -->
            <div class="col">
                <div class="card h-100">
                    <div class="card-header bg-transparent">
                        <b>Live Data Kasus Covid-19 Global</b>
                    </div>
                    <div class="card-body">
                        <h5 class="text-center" style="margin-top: 12px;">Positif</h5>
                        <h2 class="text-center" style="color: red;"><b><?= $data3['confirmed']['value'] ?></b></h2>
                        <h5 class="text-center">Sembuh</h5>
                        <h2 class="text-center" style="color: lime;"><b><?= $data3['recovered']['value'] ?></b></h2>
                        <h5 class="text-center">Meninggal</h5>
                        <h2 class="text-center"><b><?= $data3['deaths']['value'] ?></b></h2>
                    </div>
                </div>
            </div>
            <!-- End of Card Content -->
            <!-- Card Content -->
            <div class="col">
                <div class="card h-100">
                    <div class="card-header bg-transparent">
                        <b>Data Kasus Covid-19 Global</b>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive" style=" height: 280px;">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col" style="text-align: left;">Negara</th>
                                        <th scope="col">Positif</th>
                                        <th scope="col">Sembuh</th>
                                        <th scope="col">Meninggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $a = 1;
                                    foreach ($data4 as $negara) :
                                    ?>
                                        <tr>
                                            <td><?= $a++ ?></td>
                                            <td style="text-align: left;"><?= $negara['attributes']['Country_Region']; ?></td>
                                            <td><?= $negara['attributes']['Confirmed']; ?></td>
                                            <td><?= $negara['attributes']['Recovered']; ?></td>
                                            <td><?= $negara['attributes']['Deaths']; ?></td>
                                        </tr>
                                    <?php
                                    endforeach;
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Card Content -->
        </div>
    </div>
    <!-- End of Dashboard Content -->
    <br><br>

    <!-- Footer -->
    <footer>
        <div class="text-center p-3">
            Made with &#10084; by
            <a class="text-dark" href="https://github.com/fakhrizalsr" target="_blank">fakhrizalsr</a>
        </div>
    </footer>
    <!-- End of Footer -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>