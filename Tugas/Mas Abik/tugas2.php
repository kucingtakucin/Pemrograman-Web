<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas 2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        body {
            font-family: "Arial", sans-serif;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#"><b>ARTHUR</b></a>
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
        <div class="container pt-4">
            <h1 class="text-center font-weight-bold">Tugas 2</h1>
            <h3 class="font-italic">----- Btw, ini HTML didalam PHP -----</h3>
            <?php
                $nama_depan = 'Adam';
                $nama_lengkap = 'Adam Arthur Faizal';
                $panggilan = 'Arthur';
                $nim = 'M3119001';
                $asal = 'Karanganyar';
                $hobi = 'ngoding';
                echo "<h4 class='text-center'>Halo, namaku <b>$nama_depan</b>, biasa dipanggil <b>$panggilan</b>,</h4>";
                echo "<h4 class='text-center'>karena nama lengkapku <b>$nama_lengkap</b>, dan NIM ku <b>$nim</b>,</h4>";
                echo "<h4 class='text-center'>asal daerahku <b>$asal</b>, dan hobiku <b>$hobi</b></h4>";
            ?>
            <h3 class="font-italic">----- Kalau ini PHP didalam HTML -----</h3>
            <h4 class='text-center'>Halo, namaku <b><?= $nama_depan ?></b>, biasa dipanggil <b><?= $panggilan ?></b>,</h4>
            <h4 class='text-center'>karena nama lengkapku <b><?= $nama_lengkap ?></b>, dan NIM ku <b><?= $nim ?></b>,</h4>
            <h4 class='text-center'>asal daerahku <b><?= $asal ?></b>, dan hobiku <b><?= $hobi ?></b></h4>
            <h3>----------------------------------------------------------------------------</h3>
            <ol>
                <?php
                $soal1 = 10 + 10 * 10 / 10;
                $soal2 = 3 + 3 / 3;
                $soal3 = 7 + 7 + 7 + 7 / 7 ;
                $soal4 = 9 * 9 * 9 * 9 + 9;
                $soal5 = 8 + 9 * 1 + 8 + 9 / 3;
                echo "<li>10 + 10 * 10 / 10 = <b>$soal1</b></li>";
                echo "<li>3 + 3 / 3 = <b>$soal2</b></li>";
                echo "<li>7 + 7 + 7 + 7 / 7 = <b>$soal3</b></li>";
                echo "<li>9 * 9 * 9 * 9 + 9 = <b>$soal4</b></li>";
                echo "<li>8 + 9 * 1 + 8 + 9 / 3 = <b>$soal5</b></li>";
                ?>
            </ol>
        </div>
    </header>
</body>
</html>