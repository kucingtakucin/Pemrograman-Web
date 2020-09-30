<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIMULASI KREDIT MOTOR</title>
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
        <?php
        $error = [];
        $status = false;
        if (isset($_POST['submit']) && ($_POST['bayar_pertama'] < ($_POST['harga_motor'] * 0.2))):
            $error["bayar_pertama"] = "Minimal 20% dari haga motor!";
            $status = true;
        endif; ?>
        <div class="container mt-5 mb-4">
            <h1 class="font-weight-bold text-center mb-5">FORM SIMULASI KREDIT MOTOR</h1>
            <form action="" method="post">
                <div class="row">
                    <div class="form-group col-sm-4 offset-4">
                        <label for="harga_motor">Harga Motor</label>
                        <input type="number" class="form-control" id="harga_motor" name="harga_motor" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-4 offset-4">
                        <label for="bayar_pertama">Bayar Pertama</label>
                        <input type="number" class="form-control <?php if (isset($error['bayar_pertama'])):?> is-invalid <?php endif ?>" id="bayar_pertama" name="bayar_pertama" required>
                        <?php if (isset($error['bayar_pertama'])): ?>
                            <div class="invalid-feedback">
                                <?= $error['bayar_pertama'] ?>
                            </div>
                        <?php endif ?>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-4 offset-4">
                        <label for="bulan">Bulan</label>
                        <select name="bulan" id="bulan" class="form-control custom-select" required>
                            <option disabled selected>Pilih salah satu</option>
                            <option value="12">12 bulan</option>
                            <option value="24">24 bulan</option>
                            <option value="36">36 bulan</option>
                        </select>
                    </div>
                </div>
                <input type="hidden" id="bunga" name="bunga">
                <div class="row">
                    <div class="form-group col-sm-4 offset-4">
                        <button type="submit" class="btn btn-primary" name="submit">Kirim</button>
                    </div>
                </div>
            </form>
        </div>

    <!--    Modal    -->
        <?php
        /*
         * Copyright (c) 2020. Adam Arthur Faizal. All Right Reserved
         */
        $terhutang = 0;
        $besar_bunga = 0;
        $cicilan = 0;
        if (isset($_POST['submit']) && !$status):
            $terhutang = (int) $_POST['harga_motor'] - (int) $_POST['bayar_pertama'];
            $besar_bunga = (int) $_POST['bunga'] * $terhutang;
            $cicilan = $terhutang / (int) $_POST['bulan'] + $besar_bunga; ?>
            <div class="modal fade" id="modal_motor" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">CICILAN KREDIT MOTOR</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Cicilan</th>
                                    <th scope="col">Terbayar</th>
                                    <th scope="col">Kurang</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $terbayar = $cicilan;
                                $kurang = $terhutang - $cicilan;
                                for ($i = 1; $i <= (int) $_POST['bulan']; $i++): ?>
                                    <tr>
                                        <th scope="row"><?= $i ?></th>
                                        <td>Rp.<?= number_format($cicilan) ?></td>
                                        <td>Rp.<?= number_format($terbayar) ?></td>
                                        <td>Rp.<?= number_format($kurang); ?></td>
                                    </tr>
                                <?php
                                    $terbayar += $cicilan;
                                    $kurang -= $cicilan;
                                endfor ?>
                                </tbody>
                            </table>
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
            if (document.getElementById("modal_motor")) {
                $("#modal_motor").modal("show");
            }
        });
    </script>
</body>
</html>

