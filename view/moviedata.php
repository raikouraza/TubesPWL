<?php
//    if(isset($_GET['ID'])){
//        require_once '../db_function/DBHelper.php';
//        $ID = mysqli_real_escape_string($dbc, $_GET['ID']);
//
//        $sql = "SELECT * FROM tbFilm WHERE film_id ='$ID' ";
//        $result = mysqli_query($dbc, $sql) or die("BAD QUERY : $sql");
//        $row = mysqli_fetch_array($result);
//        if(isset($_GET['post'])) {
//            $name = mysqli_real_escape_string($dbc,$_GET['film_judul']);
//            $aktor = mysqli_real_escape_string($dbc,$_GET['film_aktor']);
//            $sutradara = mysqli_real_escape_string($dbc,$_GET['film_sutradara']);
//            $durasi = mysqli_real_escape_string($dbc,$_GET['film_durasi']);
//            $rating = mysqli_real_escape_string($dbc,$_GET['film_rating']);
//            $genre = mysqli_real_escape_string($dbc,$_GET['film_genre']);
//            $deskripsi = mysqli_real_escape_string($dbc,$_GET['film_deskripsi']);
//        }
//    }else{
//        header('movies.php');
//    }

$id = filter_input(INPUT_GET,'id');
if (isset($id)){
    $film = new Film();
    $filmDao = new FilmDao();
    $film->setFilmId($id);
    $film = $filmDao->getFilmById($film);
}
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
                    </li>
                    <li class="nav-item">
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
<div class="container" style="background-color: #1f2833">
    <div class="row align-items-center my-8 pt-3">
        <div class="col-lg-12" >
            <h1 align="center" style="color: #66FCF1; font-size: 50pt"><?php echo $film->getFilmJudul(); ?></h1>
        </div>
    </div>
    <!-- Heading Row -->
    <div class="row align-items-center my-4 pr-3 pl-3"  >
        <div class="col-lg-4">
            <img class="img-fluid rounded mb-4 mb-lg-0" src="<?php echo $film->getFilmPoster()?>" alt="">
        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-8">
            <h1 class="font-weight-light"> <?php echo '<iframe width="860" height="525" ';?>
                <?php echo "src='".$film->getFilmTrailer()."'>";?>
                <?php echo '</iframe>';?> </h1>
        </div>
        <!-- /.col-md-4 -->
    </div>

    <!-- /.row -->
    <!-- Content Row -->
    <div class="row">
        <div class="col-md-4 mb-100 ">
            <div class="card h-100 bg-dark">
                <div class="card-body">
                    <h2 class="card-title text-white">About : </h2>
                    <p class="card-text">
                        STARRING    : <?php echo $film->getFilmAktor(); ?><br>
                        DIRECTOR    : <?php echo $film->getFilmSutradara(); ?><br>
                        DURASI      : <?php echo $film->getFilmDurasi(); ?><br>
                        RATING      : <?php echo $film->getFilmRating(); ?><br>
                        GENRE       : <?php echo $film->getFilmGenre(); ?><br>

                    </p>
                </div>
            </div>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-8 mb-8">
            <div class="card h-100 bg-dark">
                <div class="card-body">
                    <h2 class="card-title text-white">Synopsis</h2>
                    <p class="card-text"> <?php  echo $film->getFilmDeskripsi()?></p>
                </div>
            </div>
        </div>
    </div>

</div>
    <!-- /.row -->
    <!-- Call to Action Well -->
    <div class="card text-white bg-secondary my-5 py-4 text-center text">
        <div class="card-body">
            <p class="text-white m-0">Schedule</p>
            <p class="text-white m-0">Gate Open</p>
            <input type="submit" value="09:00" id="sesi1" name="sesi1">
            <input type="submit" value="12:00" id="sesi2" name="sesi2">
            <input type="submit" value="15:00" id="sesi3" name="sesi3">
            <input type="submit" value="18:00" id="sesi4" name="sesi4">
            <input type="submit" value="21:00" id="sesi5" name="sesi5">
        </div>
    </div>
</div>
<!-- /.container -->


<!-- Bootstrap core JavaScript -->
<script src="../src/vendor/jquery/jquery.js"></script>
<script src="../src/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
