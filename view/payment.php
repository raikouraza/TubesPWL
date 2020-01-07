<?php
SESSION_START();

if (!isset($_SESSION['user_logged'])) {
    $_SESSION['user_logged'] = false;
}
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> CINEMA YAS!</title>
    <!-- Bootstrap core CSS -->
    <link href="../src/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="../src/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../src/vendor/bootstrap/css/heroic-features.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="src/vendor/bootstrap/css/seating.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../src/vendor/bootstrap/js/seating.js"></script>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../src/vendor/bootstrap/css/bootstrap.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../src/vendor/bootstrap/css/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../src/vendor/bootstrap/css/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../src/vendor/bootstrap/css/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../src/vendor/bootstrap/css/util.css">

    <link rel="stylesheet" type="text/css" href="../src/vendor/bootstrap/css/navbar.css">

    <link rel="stylesheet" type="text/css" href="../src/vendor/bootstrap/css/main.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="shortcut icon" type="image/jpg" href="../src/images/movie.ico"/>
    <style>

        iframe {
            max-width: 100%;
            max-height: 100%;
        }
        img {
            max-width: 100%;
            max-height: 100%;
        }
    </style>
</head>
<body>

<!-- Navigation -->
<!-- Jika User Sudah Login -->
<?php if($_SESSION['user_logged']){?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="?menu=hm">CINEMA YAS!</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul id="mainMenu" class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="?menu=hm">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="?menu=mov">Movies</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="?menu=book">Book Ticket!</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?menu=mem">Membership</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?menu=pro">Promotions</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="?menu=ab">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?menu=out">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
    </main>
    <!-- Jika User Belum Login -->
<?php } else { ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="?menu=hm">CINEMA YAS!</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul id="mainMenu" class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="?menu=hm">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="movies.php">Movies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="promotions.php">Promotion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="signinsignup.php">Sign In/Sign Up</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<main>
    <?php
    }
    ?>
</main>
<!-- Page Content -->

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5>Pembayaran Tiket XD</h5>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <form method="post" enctype="multipart/form-data" id="filmForm">
                            <div class="form-group">
                                <label for="txtJudulFilm">Masukkan Judul</label>
                                <hr>
                                <input type="text" class="form-control" id="txtjudul" name="txtFilmJudul"
                                       placeholder="Masukkan Judul">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txtDeskripsi">Masukkan Deskripsi</label>
                                <hr>
                                <textarea class="form-control" rows="5" form="filmForm" name="txtFilmDeskripsi"
                                          placeholder="Masukan Deskripsi"></textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txtPoster">Masukkan Poster</label>
                                <hr>
                                <input type="file" class="form-control-file" id="txtPoster" name="txtFilmPoster">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txtTrailer">Masukkan Link Video</label>
                                <hr>
                                <input type="url" class="form-control" id="txtTrailer" name="txtFilmTrailer"
                                       placeholder="Masukkan Link Video">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txtSutradara">Masukkan Nama Sutradara</label>
                                <hr>
                                <input type="text" class="form-control" id="txtSutradara" name="txtFilmSutradara"
                                       placeholder="Masukkan Nama Sutradara">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txtNamaAktor">Masukkan Nama-Nama Aktor</label>
                                <hr>
                                <input type="text" class="form-control" id="txtAktor" name="txtFilmAktor"
                                       placeholder="Masukkan Nama-Nama Aktor">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txtDurasi">Masukkan Durasi</label>
                                <hr>
                                <input type="text" class="form-control" id="txtDurasi" name="txtFilmDurasi"
                                       placeholder="Masukkan Durasi">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txtRating">Pilih Rating</label>
                                <hr>
                                <label class="radio-inline"><input value="SU" type="radio" name="txtFilmRating" checked>SU</label>
                                <label class="radio-inline"><input value="BO" type="radio"
                                                                   name="txtFilmRating">BO</label>
                                <label class="radio-inline"><input value="R" type="radio" name="txtFilmRating">R</label>
                                <label class="radio-inline"><input value="D" type="radio" name="txtFilmRating">D</label>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txtNamaAktor">Masukkan Genre Film</label>
                                <hr>
                                <input type="text" class="form-control" name="txtFilmGenre"
                                       placeholder="Masukkan Genre">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary" id="btnSubmit" name="btnSubmit">Submit
                            </button>
                        </form>
                    </div>
                    <br>


                </div>
                <hr>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->