<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#"><b>SIAKAD</b></a>
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
        <div class="container mt-3 mb-3">
            <h1 class="text-center font-weight-bold">Form Data Mahasiswa</h1>
        </div>
    </header>

    <main>
        <div class="container mt-3 border rounded-lg p-5 shadow-lg">
            <form method="post">
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" id="email" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control" id="password" required>
                    </div>
                </div>
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="Jenis Kelamin" id="Lakilaki1" value="Laki-laki" >
                                <label class="form-check-label" for="Lakilaki1">
                                    Laki-laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="Jenis Kelamin" id="Perempuan2" value="Peremuan">
                                <label class="form-check-label" for="Perempuan2">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="form-group row">
                    <?php $hobbies = ['Menonton Anime', 'Ngoding', 'Membaca Buku', 'Main Game', 'Makan', 'Tidur'] ?>
                    <div class="col-sm-2">Hobi</div>
                    <div class="col-sm-10">
                        <?php
                        $total = '';
                        $index = 0;
                        foreach ($hobbies as $hoby) :
                            if ($index === (count($hobbies) - 1)): $total .= $hoby;
                            else: $total .= $hoby . ', ';
                            endif;
                            $index++;
                        ?>
                            <div class="form-check">
                                <input class="form-check-input" name="hobi" type="checkbox" value="<?= $total ?>" id="<?= $hoby ?>">
                                <label class="form-check-label" for="<?= $hoby ?>">
                                    <?= $hoby ?>
                                </label>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <?php $studies = [
                        'Teknik Informatika',
                        'Matematika',
                        'Fisika',
                        'Kimia',
                        'Biologi',
                        'Nonton Anime'
                    ] ?>
                    <div class="col-sm-2">
                        <label for="prodi">Program Studi</label>
                    </div>
                    <div class="col-sm-10">
                        <select class="custom-select" name="prodi" id="prodi">
                            <?php foreach ($studies as $study) : ?>
                                <option value="<?= $study ?>"><?= $study ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10 d-flex justify-content-center align-items-center">
                        <button type="submit" name="submit" class="btn btn-lg btn-primary">Submit Data</button>
                    </div>
                </div>
            </form>
        </div>
    </main>

    <footer>
        <h5 class="text-center mt-3 mb-5">Copyright &copy; 2020. Adam Arthur Faizal</h5>
    </footer>

    <?php if (isset($_POST['submit'])): ?>
        <div class="modal fade" id="modal">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Data Mahasiswa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="table-responsive">

                            <table class="table table-striped">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Email</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">JK</th>
                                    <th scope="col">Hobi</th>
                                    <th scope="col">Prodi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><h3><b><?= $_POST['email'] ?></b></h3></td>
                                    <td><h3><b><?= $_POST['password'] ?></b></h3></td>
                                    <td><h3><b><?= $_POST['Jenis_Kelamin'] ?></b></h3></td>
                                    <td><h3><b><?= $_POST['hobi'] ?></b></h3></td>
                                    <td><h3><b><?= $_POST['prodi'] ?></b></h3></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    <?php endif ?>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            if (document.getElementById('modal')) {
                $('#modal').modal('show');
            }
        });
    </script>
</body>
</html>