<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pertemuan 2</title>
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
            <?php
            // Latihan 1
            $nama = "Adam Arthur Faizal";
            $panggilan = "Arthur";
            $nim = 1;
            $_asal = "Karanganyar";
            $semester = 3 ?>
            <h1 class="font-weight-bold mt-4 text-center">Latihan 1</h1>
            <p>Halo! nama saya <b><?= $nama ?></b>, biasa dipanggil <b><?= $panggilan ?></b>, nim saya <b><?= $nim ?></b>.
                Saya berasal dari <b><?= $_asal ?></b>, dan sekarang saya semester <b><?= $semester ?></b></p>

            <?php
            // Latihan 2
            $variable_global = 1;
            function myTest(): void
            {
                $variable_lokal = 1;
                echo "Ini adalah variabel lokal didalam function myTest : $variable_lokal<br>";
//                echo $variable_global;
            }
//            echo $variable_lokal;
            function myTest2(): void
            {
                global $variable_global;
                $variable_global = 21;
                echo "Ini adalah variabel global didalam function myTest2 : $variable_global<br>";
            }
            ?>
            <h1 class="font-weight-bold mt-4 text-center">Latihan 2</h1>
            <?php
            echo "Ini adalah variabel global diluar semua function : $variable_global<br>";
            myTest();
            myTest2();
            ?>

            <?php
            // Latihan 3
            $x = 1;
            $y = 9;
            ?>
            <h1 class="font-weight-bold mt-4 text-center">Latihan 3</h1>
            <h5><b>Penjumlahan</b>: <?= $x ?> + <?= $y ?> = <?= $x + $y ?></h5>
            <h5><b>Pengurangan</b>: <?= $x ?> - <?= $y ?> = <?= $x - $y ?></h5>
            <h5><b>Perkalian</b>: <?= $x ?> * <?= $y ?> = <?= $x * $y ?></h5>
            <h5><b>Pembagian</b>: <?= $x ?> / <?= $y ?> = <?= $x / $y ?></h5>
            <h5><b>Modulo</b>: <?= $x ?> % <?= $y ?> = <?= $x % $y ?></h5>
            <h5>Hasil increment (x++, y++) = <?= $x++ ?> & <?= $y++ ?></h5>
            <h5>(++x, ++y) = <?= ++$x ?> & <?= ++$y ?></h5>
            <h5>Hasil decrement (x--, y--) = <?= $x-- ?> & <?= $y-- ?></h5>
            <h5>(--x, --y) = <?= --$x ?> & <?= --$y ?></h5>

            <?php
            // Latihan 4
            $nama_depan = 'Adam Arthur';
            $nama_belakang = 'Faizal';
            $nama_lengkap = "$nama_depan $nama_belakang";
            echo "<h1 class='font-weight-bold text-center'>Latihan 4</h1>";
            echo 'Selamat ' . 'siang!<br>';
            echo "Aku $nama_depan <br>";
            echo "$nama_lengkap<br>";
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
