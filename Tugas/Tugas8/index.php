<?php
/**
 * Copyright (c) 2020. Adam Arthur Faizal. All Right Reserved
 * @author (Adam Arthur Faizal)
 * @version (20 Oktober 2020)
 *
 * DILARANG COPY PASTE TANPA SE-IJIN PEMILIK REPOSITORY INI!!!
 */

    $data_bulan = [
        '01' => 'Januari',
        '02' => 'Februari',
        '03' => 'Maret',
        '04' => 'April',
        '05' => 'Mei',
        '06' => 'Juni',
        '07' => 'Juli',
        '08' => 'Agustus',
        '09' => 'September',
        '10' => 'Oktober',
        '11' => 'November',
        '12' => 'Desember'
    ];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Text Area Bebas</title>
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
            <h1 class="font-weight-bold text-center mt-3 mb-3">
                TEXT AREA BEBAS
            </h1>
            <form action="" method="post">
                <div class="form-group">
                    <label for="textarea">Text Area</label>
                    <textarea name="textarea" id="textarea" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label for="waktu">Waktu</label>
                    <input type="date" id="waktu" class="form-control" name="waktu">
                </div>
                <div class="form-group">
                    <button class="btn btn-lg btn-primary" type="submit" name="submit">Kirim</button>
                </div>
            </form>
        </div>

        <!--    Modal    -->
        <?php
        /**
         * Copyright (c) 2020. Adam Arthur Faizal. All Right Reserved
         * @author (Adam Arthur Faizal)
         * @version (20 Oktober 2020)
         *
         * DILARANG COPY PASTE TANPA SE-IJIN PEMILIK REPOSITORY INI!!!
         */


        if(isset($_POST['submit'])):
            $hasil = str_ireplace("murid", "<b>mahasiswa</b>", $_POST["textarea"]);
            $hasil = str_ireplace("guru", "<b>dosen</b>", $hasil);
            $hasil = str_ireplace("luring", "<b>daring</b>", $hasil);
            $waktu = explode('-', $_POST['waktu']);
            [$tahun, $bulan, $hari] = $waktu;
            foreach ($data_bulan as $key => $month):
                if ($bulan === (string)$key):
                    $bulan = $month;
                endif;
            endforeach;
            ?>
            <div class="modal fade" id="modal_filter" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">OUTPUT TEXT</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?= $hasil ?><br>
                            Waktu = <?= $tahun ?>-<?= $bulan ?>-<?= $hari ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif ?>
    </main>
    <footer>
        <h5 class="text-center font-italic">Copyright &copy; 2020. Adam Arthur Faizal. All Rights Reserved</h5>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            if (document.getElementById("modal_filter")) {
                $("#modal_filter").modal("show");
            }
        });
    </script>
</body>
</html>

