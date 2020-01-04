<?php
    if(isset($_GET['ID'])){
        require_once '../db_function/DBHelper.php';
        $ID = mysqli_real_escape_string($dbc, $_GET['ID']);

        $sql = "SELECT * FROM tbFilm WHERE film_id ='$ID' ";
        $result = mysqli_query($dbc, $sql) or die("BAD QUERY : $sql");
        $row = mysqli_fetch_array($result);
        if(isset($_GET['post'])) {
            $name = mysqli_real_escape_string($dbc,$_GET['film_judul']);
            $aktor = mysqli_real_escape_string($dbc,$_GET['film_aktor']);
            $sutradara = mysqli_real_escape_string($dbc,$_GET['film_sutradara']);
            $durasi = mysqli_real_escape_string($dbc,$_GET['film_durasi']);
            $rating = mysqli_real_escape_string($dbc,$_GET['film_rating']);
            $genre = mysqli_real_escape_string($dbc,$_GET['film_genre']);
            $deskripsi = mysqli_real_escape_string($dbc,$_GET['film_deskripsi']);
        }
    }else{
        header('movies.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Small Business - Start Bootstrap Template</title>
    <!-- Bootstrap core CSS -->
    <link href="../src/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="movies.php">Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="promotions.php">Promotions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="membership.php">Membership</a>
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
                    <a class="nav-link" href="signinsignup.php">Sign in</a>
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
<div class="container">
    <!-- Heading Row -->
    <div class="row align-items-center my-5">
        <div class="col-lg-7">
            <img class="img-fluid rounded mb-4 mb-lg-0" src="<?php $row['film_poster']?>" alt="">
        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-5">
            <h1 class="font-weight-light"> <?php echo $row['film_judul'] ?> ></h1>
        </div>
        <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->
    <!-- Content Row -->
    <div class="row">
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">Card One</h2>
                    <p class="card-text">
                        STARRING    : <?php $row['film_aktor']; ?>
                        DIRECTOR    : <?php $row['film_sutradara']; ?>
                        DURASI      : <?php $row['film_durasi']; ?>
                        RATING      : <?php $row['film_rating']; ?>
                        GENRE       : <?php $row['film_rating']; ?>
                        ?>
                    </p>
                </div>
            </div>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-8 mb-8">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">Synopsis</h2>
                    <p class="card-text"> <?php $row['film_deskripsi']?></p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary btn-sm">More Info</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <!-- Call to Action Well -->
    <div class="card text-white bg-secondary my-5 py-4 text-center">
        <div class="card-body">
            <p class="text-white m-0">Schedule</p>
        </div>
    </div>


</div>
<!-- /.container -->
<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="../src/vendor/jquery/jquery.js"></script>
<script src="../src/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
