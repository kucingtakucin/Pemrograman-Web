<?php
/*
 * Copyright (c) 2020. Adam Arthur Faizal. All Right Reserved
 */
$komputer = [
    "1A001" => [
        "Barang" => 'Monitor Samsung 15',
        "Harga"=> 500000,
        "Diskon" => 0.07,
        "Stok" => 5
    ],
    "2A002" => [
        "Barang" => 'Monitor LG 14',
        "Harga" => 400000,
        "Diskon" => 0.02,
        "Stok" => 3,
    ],
    "3A003" => [
        "Barang" => 'CD-RW Samsung',
        "Harga" => 300000,
        "Diskon" => 0.1,
        "Stok" => 10
    ],
    "4A004" => [
        "Barang" => 'Memory Card 256',
        "Harga" => 450000,
        "Diskon" => 0,
        "Stok" => 6
    ],
    "5B005" => [
        "Barang" => 'Hard Disk Seagate 512',
        "Harga" => 570000,
        "Diskon" => 0.05,
        "Stok" => 5
    ]
]
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toko Komputer</title>
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
            <h1 class="font-weight-bold text-center mt-3 mb-3">TOKO KOMPUTER</h1>
            <table class="table table-striped">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Barang</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Diskon</th>
                    <th scope="col">Stok</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 0; foreach($komputer as $kode => $element): ?>
                    <tr>
                        <th scope="row"><?= $i + 1 ?></th>
                        <td><?= $kode ?></td>
                        <?php foreach($element as $key => $value): ?>
                            <td><?= $value ?></td>
                        <?php endforeach ?>
                    </tr>
                <?php $i++; endforeach ?>
                </tbody>
            </table>
            <form action="" method="post" class="mt-4">
                <?php foreach($komputer as $kode => $element): ?>
                    <div class="form-group">
                        <label for="<?= $kode ?>"><?= $element["Barang"] ?></label>
                        <select name="<?= $element['Barang'] ?>" id="<?= $kode ?>" class="form-control custom-select">
                            <?php for ($i = 0; $i <= $element["Stok"]; $i++): ?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php endfor ?>
                        </select>
                    </div>
                <?php endforeach ?>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-info btn-lg">Kirim</button>
                </div>
            </form>
        </div>
        <!--    Modal    -->
        <?php if(isset($_POST['submit'])): ?>
            <div class="modal fade" id="modal_komputer" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">KWITANSI PEMBAYARAN</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Kode</th>
                                    <th scope="col">Barang</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Diskon</th>
                                    <th scope="col">Qty</th>
                                    <th scope="col">Bayar</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i = $bayar = $total_bayar = 0;
                                foreach ($komputer as $kode => $values): ?>
                                    <tr>
                                        <th scope="row"><?= $i + 1 ?></th>
                                        <td><?= $kode ?></td>
                                        <?php foreach ($_POST as $key => $value): ?>
                                            <?php if ($values["Barang"] === str_replace("_", " ", $key)):
                                                $bayar = (($values["Harga"] - ($values["Harga"] * $values["Diskon"])) * (int) $value) ?>
                                                <td><?= str_replace("_", " ", $key) ?></td>
                                                <td>Rp.<?= number_format($values["Harga"]) ?></td>
                                                <td><?= $values["Diskon"] ?></td>
                                                <td><?= (int) $value ?></td>
                                                <td>Rp.<?= number_format($bayar) ?></td>
                                            <?php $total_bayar += $bayar; endif ?>
                                        <?php endforeach ?>
                                    </tr>
                                <?php $i++; endforeach ?>
                                </tbody>
                                <tfoot class="thead-dark">
                                    <tr>
                                        <th colspan="<?= $i ?>">Total Harga</th>
                                        <td>Rp.<?= number_format($total_bayar) ?></td>
                                    </tr>
                                </tfoot>
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
            if (document.getElementById("modal_komputer")) {
                $("#modal_komputer").modal("show");
            }
        });
    </script></body>
</html>
