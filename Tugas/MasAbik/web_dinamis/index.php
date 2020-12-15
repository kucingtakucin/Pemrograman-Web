<?php
session_start();
require_once 'Model/Mahasiswa.php';
require_once 'Controller/Mahasiswa.php';
use Controller\Mahasiswa\Mahasiswa as MahasiswaController;
use Model\Mahasiswa\Mahasiswa;
$students = new Mahasiswa();
$controller = new MahasiswaController() ?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Web Dinamis - Mahasiswa</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand font-weight-bold" href="#">Arthur</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <?php if (isset($_POST['submit']) && $controller->insert($_POST)): ?>
                <div id="pesan" data-isi="Berhasil Ditambahkan"></div>
            <?php endif ?>
            <?php if (isset($_POST['delete']) && $controller->delete($_POST)): ?>
                <div id="pesan" data-isi="Berhasil Dihapus"></div>
            <?php endif ?>
            <?php if (isset($_POST['update']) && $controller->update($_POST)): ?>
                <div id="pesan" data-isi="Berhasil Diupdate"></div>
            <?php endif ?>
            <section class="justify-content-center align-items-center d-flex flex-column mt-3">
                <h1 class="font-weight-bold text-center">DATA MAHASISWA</h1>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mahasiswatambahModal">
                    Insert
                </button>
            </section>
            <table class="table table-dark table-striped mt-3">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Tempat Lahir</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No HP</th>
                        <th scope="col">Email</th>
                        <th scope="col">---</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0; foreach($students->fetchAll() as $student): ?>
                        <tr>
                            <th scope="row"><?= ++$i ?></th>
                            <td><?= $student->nama ?></td>
                            <td><?= $student->jenis_kelamin ?></td>
                            <td><?= $student->tempat_lahir ?></td>
                            <td><?= $student->tanggal_lahir ?></td>
                            <td><?= $student->jurusan ?></td>
                            <td><?= $student->alamat ?></td>
                            <td><?= $student->no_hp ?></td>
                            <td><?= $student->email ?></td>
                            <td>
                                <a href="edit.php?nim=<?= $student->nim ?>" class="badge text-decoration-none bg-warning">Edit</a>
<!--                            <form action="" class="form-inline" method="post">-->
                                <button class="badge bg-danger btn" name="delete">Delete</button>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </main>

    <!-- Modal 1 - Tambah -->
    <div class="modal fade" id="mahasiswatambahModal" tabindex="-1" aria-labelledby="mahasiswatambahModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mahasiswatambahModalLabel">Tambah Data Mahasiswa</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body m-3">
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label" for="nama">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" name="nama">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label" for="jenis_kelamin">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-select">
                                    <option disabled selected>Pilih salah satu</option>
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label" for="tempat_lahir">Tempat Lahir</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label" for="tanggal_lahir">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label" for="jurusan">Jurusan</label>
                            <div class="col-sm-10">
                                <select class="form-select" name="jurusan" aria-label="Default select example">
                                    <option disabled selected>Pilih salah satu</option>
                                    <option value="Teknik Informatika">Teknik Informatika</option>
                                    <option value="Teknik Elektro">Teknik Elektro</option>
                                    <option value="Teknik Industri">Teknik Industri</option>
                                    <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label" for="alamat">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="alamat" name="alamat">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label" for="no_hp">No HP</label>
                            <div class="col-sm-10">
                                <input type="number" min="0" class="form-control" id="no_hp" name="no_hp">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label" for="email">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-danger">Reset</button>
                        <button type="submit" class="btn btn-primary" name="submit">Tambah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer>
        <h5 class="text-center font-italic">Copyright &copy; 2020; Adam Arthur Faizal</h5>
    </footer>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script
            src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>