<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buku Tamu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top">
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
    <main class="pt-5">
        <?php
        $status = false;
        $errors = [];
        $keys = [];
        if (isset($_POST['submit'])):
            $keys = array_keys($_POST);
            foreach ($keys as $key):
                if (empty(trim(($_POST["$key"])))):
                    $errors["$key"] = "Field $key harus diisi";
                    $status = true;
                elseif ($key === 'email' && !filter_v($_POST["$key"], FILTER_SANITIZE_EMAIL)):
                    $errors["$key"] = "Field $key tidak valid";
                    $status = true;
                elseif ($key === 'website' && !filter_var($_POST["$key"], FILTER_SANITIZE_URL)):
                    $errors["$key"] = "Field $key tidak valid";
                else: $status = false;
                endif;
            endforeach;
        endif ?>
        <div class="container rounded-lg shadow-lg mt-5 p-5 mb-5">
            <h1 class="text-center mb-4 font-weight-bold">BUKU TAMU</h1>
            <form action="" method="post">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control <?php if(isset($errors['nama'])):?> is-invalid <?php endif ?>" name="nama" id="nama">
                    <div class="invalid-feedback"><?= $errors['nama'] ?></div>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control <?php if(isset($errors['email'])):?> is-invalid <?php endif ?>" id="email" name="email">
                    <div class="invalid-feedback"><?= $errors['email'] ?></div>
                </div>
                <div class="form-group">
                    <label for="website">Website</label>
                    <input type="text" class="form-control <?php if(isset($errors['website'])):?> is-invalid <?php endif ?>" id="website" name="website">
                    <div class="invalid-feedback"><?= $errors['website'] ?></div>
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select name="gender" id="gender" class="custom-select form-control <?php if(isset($errors['gender'])):?> is-invalid <?php endif ?>">
                        <option disabled selected>Pilih salah satu</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                    <div class="invalid-feedback"><?= $errors['gender'] ?></div>
                </div>
                <div class="form-group">
                    <label for="komentar">Komentar</label>
                    <textarea name="komentar" id="komentar" cols="30" rows="10" class="form-control <?php if(isset($errors['komentar'])):?> is-invalid <?php endif ?>"></textarea>
                    <div class="invalid-feedback"><?= $errors['komentar'] ?></div>
                </div>
                <div class="form-group">
                    <button class="btn btn-lg btn-primary" type="submit" name="submit">Kirim</button>
                </div>
            </form>
        </div>
        <?php
        /*
         * Copyright (c) 2020. Adam Arthur Faizal. All Right Reserved
         */
        if (isset($_POST['submit']) && !$status) : ?>
            <div class="modal fade" id="modal-hasil">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Data Tamu</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class=password"modal-body">
                            <h3>Nama : <b><?= $_POST['nama'] ?></b</h3>
                            <h3>Email : <b><?= $_POST['email'] ?></b></h3>
                            <h3>Website : <b><?= $_POST['website'] ?></b></h3>
                            <h3>Gender : <b><?= $_POST['gender'] ?></b></h3>
                            <h3>Komentar : <b><?= $_POST['komentar'] ?></b></h3>
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
        <h4 class="font-italic text-center">Copyright &copy; 2020. Adam Arthur Faizal</h4>
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