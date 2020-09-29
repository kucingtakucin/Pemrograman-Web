<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LATIHAN 2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">ARTHUR</a>
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
        <div class="container mt-5 mb-4">
            <h1 class="font-weight-bold text-center">LATIHAN 2</h1>
            <form action="" method="post">
                <div class="row">
                    <div class="form-group col-md-4 offset-4">
                        <label for="nilai">Nilai</label>
                        <input type="text" name="nilai" class="form-control" id="nilai" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4 offset-4">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Modal-->
        <?php
        /*
         * Copyright (c) 2020. Adam Arthur Faizal. All Right Reserved
         */
        if (isset($_POST['submit'])):
            ?>
            <div class="modal fade" id="nilaiModal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Hasil Penilaian</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>
                                <?php if ($_POST['nilai'] > 50): ?>
                                    Selamat, kamu lulus!
                                <?php else: ?>
                                    Maaf, kamu tidak lulus!
                                <?php endif ?>
                            </p>
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
        <h5 class="text-center font-italic">Copyright &copy; 2020. Adam Arthur Faizal. All Right Reserved</h5>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            if (document.getElementById("nilaiModal")) {
                $("#nilaiModal").modal("show");
            }
        });
    </script>
</body>
</html>


