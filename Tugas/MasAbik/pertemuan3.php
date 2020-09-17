<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Praktikum 3</title>
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
        <div class="container mt-4">
            <?php
            /*
             * Copyright (c) 2020. Adam Arthur Faizal. All Right Reserved
             */
            $nama = 'Adam Arthur Faizal';
            $panggilan = 'Arthur';
            $nim = 01;
            $asal = 'Karanganyar';
            $tempat_lahir = 'Pontianak';
            $tanggal_lahir = 20; ?>
            <h1>No. 1</h1>
            <h4> “Hai! Nama saya <b><?= $nama ?></b> biasa dipanggil <b><?= $panggilan ?></b> , nim saya <b><?= $nim ?></b>.
                Saya berasal dari <b><?= $asal ?></b>. Saya lahir di <b><?= $tempat_lahir ?></b>,
                pada tanggal <b><?= $tanggal_lahir ?> Juli 2002</b>.” </h4>
            <h1>No. 3</h1>
            <h4>Diketahui jari-jari lingkaran = 3 cm, hitung keliling dan luasnya!</h4>
            <?php
            // Keliling lingkaran, 2 * Pi * jari-jari
            // Misal jari-jari = 3, Pi = 3.14
            $jari = 3;
            $keliling = 2 * M_PI * $jari;
            echo "- Keliling lingkaran adalah: <b>$keliling</b> <br>";
            // Luas lingkaran, Pi * jari-jari * jari-jari
            // Misal jari-jari = 3, Pi = 3.14
            $jari = 3;
            $luas = M_PI * $jari ** 2;
            echo "- Luas lingkaran adalah: <b>$luas</b> <br>" ?>
            <h1>No. 8</h1>
            <h4>Diketahui jari-jari bola = 3 cm, hitung keliling, luas permukaan dan volumenya!</h4>
            <?php
            // Keliling bola, 4 / 3 * Pi * jari-jari * jari-jari
            // Misal jari-jari = 3, Pi = 3.14
            $jari = 3;
            $keliling = 4 / 3 * M_PI * $jari ** 2;
            echo "- Keliling bola adalah: <b>$keliling</b><br>";
            // Luas permukaan bola, 4 * Pi * jari-jari * jari-jari
            // Misal jari-jari = 3, Pi = 3.14
            $jari = 3;
            $luas_permukaan = 4 * M_PI * $jari ** 2;
            echo "- Luas permukaan bola adalah: <b>$luas_permukaan</b> <br>";
            // Volume bola, 4 / 3 * Pi * jari-jari * jari-jari * jari-jari
            // Misal jari-jari = 3, Pi = 3.14
            $jari = 3;
            $volume = 4 / 3 * M_PI * $jari ** 3;
            echo "- Volume bola adalah: <b>$volume</b><br>";
            ?>

        </div>
    </main>
    <footer>
        <h5 class="font-italic text-center">Copyright &copy; 2020. Adam Arthur Faizal</h5>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>



