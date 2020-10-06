<?php
/*
 * Copyright (c) 2020. Adam Arthur Faizal. All Right Reserved
 */

try {
    /** @var array $nilai */
    $nilai = [
        "Adam" => [
            "UTS" => random_int(70, 100),
            "UAS" => random_int(70, 100)
        ],
        "Aldhi" => [
            "UTS" => random_int(70,100),
            "UAS" => random_int(70,100)
        ],
        "Adhani" => [
            "UTS" => random_int(70,100),
            "UAS" => random_int(70, 100)
        ],
        "Adhi" => [
            "UTS" => random_int(70,100),
            "UAS" => random_int(70, 100)
        ],
        "Aksal" => [
            "UTS" => random_int(70, 100),
            "UAS" => random_int(70, 100)
        ],
        "Aldan" => [
            "UTS" => random_int(70,100),
            "UAS" => random_int(70,100)
        ],
        "Almira" => [
            "UTS" => random_int(70,100),
            "UAS" => random_int(70, 100)
        ],
        "Alwi" => [
            "UTS" => random_int(70,100),
            "UAS" => random_int(70, 100)
        ],
        "Amri" => [
            "UTS" => random_int(70, 100),
            "UAS" => random_int(70, 100)
        ],
        "Anggita" => [
            "UTS" => random_int(70, 100),
            "UAS" => random_int(70, 100)
        ]
    ];
} catch (Exception $e) {
    die($e->getMessage());
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NILAI UTS & UAS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand font-weight-bold" href="#">ARTHUR</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                </div>
            </div>
        </div>
    </nav>
</header>
<main>
    <div class="container">
        <h1 class="font-weight-bold text-center mt-1 mb-1">DAFTAR NILAI - LATIHAN 3</h1>
        <table class="table table-striped">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Panggilan</th>
                <th scope="col">Nilai UTS</th>
                <th scope="col">Nilai UAS</th>
            </tr>
            </thead>
            <tbody>
            <?php $i = 0; foreach ($nilai as $nama => $ujian): ?>
                <tr>
                    <th scope="row"><?= $i + 1 ?></th>
                    <td><?= $nama ?></td>
                    <?php foreach($ujian as $key => $value): ?>
                        <td><?= $value ?></td>
                    <?php endforeach ?>
                </tr>
            <?php $i++; endforeach ?>
            </tbody>
        </table>
    </div>
</main>
<footer>
    <h5 class="text-center font-italic">Copyright &copy; 2020. Adam Arthur Faizal. All Rights Reserved</h5>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        if (document.getElementById("modal_motor")) {
            $("#modal_motor").modal("show");
        }
    });
</script>
</body>
</html>

