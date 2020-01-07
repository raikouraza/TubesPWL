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
<?php if ($_SESSION['user_logged']){ ?>
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
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <div class="card">
            <div class="card-body">
                <h1 align="center" style="color: #45a29e">Pembayaran Tiket </h1>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <form method="post" enctype="multipart/form-data" id="filmForm">
                            <br>
                            <div class="form-group">
                                <label for="txtSutradara">Tiket ID</label>
                                <hr>
                                <input type="text" class="form-control" id="txtSutradara" name="txtFilmSutradara"
                                       placeholder="Masukkan Id Tiket">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="txtNamaAktor">Jadwal ID</label>
                                <hr>
                                <input type="text" class="form-control" id="txtAktor" name="txtFilmAktor"
                                       placeholder="Masukkan Jadwal ID">
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
    <div class="col-sm-2"></div>
</div>
<!-- [ Main Content ] end -->