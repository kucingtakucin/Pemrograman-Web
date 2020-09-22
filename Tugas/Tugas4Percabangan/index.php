<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas 4 Percabangan - Form Perhitungan Gaji</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
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
            <h1 class="text-center mb-4 mt-4 font-weight-bold">FORM PERHITUNGAN GAJI</h1>
            <form method="post">
                <div class="form-group">
                    <label for="golongan">Golongan </label>
                    <select name="golongan" id="golongan" class="form-control custom-select" required>
                        <option disabled selected>Pilih salah satu</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="keluarga">Status Perkawinan </label>
                    <select name="keluarga" id="keluarga" class="form-control custom-select" required>
                        <option disabled selected>Pilih salah satu</option>
                        <option value="1">Sudah Kawin</option>
                        <option value="0">Belum Kawin</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="anak">Jumlah Anak </label>
                    <input type="number" min="0" name="anak" id="anak" class="form-control" required>
                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="submit" name="submit">Submit</button>
                </div>
            </form>
        </div>
        <?php
        $gaji_pokok = 0;
        $pajak = 0;
        $tunjangan_keluarga = 0;
        $tunjangan_anak = 0;
        $tunjangan_profesi = 50000;
        $total_tunjangan = 0;
        if (isset($_POST['submit'])):
            switch ($_POST['golongan']):
                case '1':
                    $gaji_pokok = 1000000;
                    $pajak = 0;
                    break;
                case '2':
                    $gaji_pokok = 2000000;
                    $pajak = 2.5/100;
                    break;
                case '3':
                    $gaji_pokok = 3000000;
                    $pajak = 5/100;
                    break;
                default:
                    die("<h1>Terdapat kesalahan!</h1>");
            endswitch;
            switch ($_POST['keluarga']):
                case '0';
                    break;
                case '1':
                    $tunjangan_keluarga = 200000;
                    break;
                default:
                    die("<h1>Terdapat kesalahan!</h1>");
            endswitch;
            if ((int) $_POST['anak'] <= 3): $tunjangan_anak = 100000 * (int) $_POST['anak'];
            else: $tunjangan_anak = 100000 * 3;
            endif;
            $total_tunjangan = $tunjangan_keluarga + $tunjangan_anak + $tunjangan_profesi;
            $gaji_kotor = $gaji_pokok + $total_tunjangan;
            $gaji_bersih = $gaji_kotor - $pajak * $gaji_kotor ?>
            <div class="modal fade" id="modal-hasil">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Laporan Gaji</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h3>Gaji Kotor: Rp.<b><?= number_format($gaji_kotor) ?></b></h3>
                            <h3>Gaji Bersih: Rp.<b><?= number_format($gaji_bersih) ?></b></h3>
                            <h3>Gaji Pokok: Rp.<b><?= number_format($gaji_pokok) ?></b></h3>
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
        <h4 class="font-italic text-center">Copyright &copy; 2020. Adam Arthur Faizal. All Rights Reserved</h4>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            if (document.getElementById('modal-hasil')) {
                $('#modal-hasil').modal('show')
            }
        });
    </script>
</body>
</html>