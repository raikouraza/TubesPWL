<?php
$filmDao = new FilmDao();
$jadwalDao = new JadwalDao();

$jadwals = $jadwalDao->getAllJadwal();
$films = $filmDao->getAllFilm();
?>
<style type="text/css">
    div.container-fluid {
        width: 70%;
        margin: auto;

        background-color: darkgrey;
    }
    body {
        background:#000;
    }

    h1 {
        text-align: center;
        margin-top: 5%;
        font-family: Georgia;
        font-style:italic;
        font-weight: normal;
        font-size: 72px;
        color: #fff;
    }

    p {
        text-align:center;
        color: #fdec6e;
    }

    a:link {
        text-decoration: none;
    }

    a:visited {
        text-decoration: none;
        color: #fff;
    }

    a {
        color:#45a29e;
        -moz-transition: all 0.2s ease-in;
        -o-transition: all 0.2s ease-in;
        -webkit-transition: all 0.2s ease-in;
        transition: all 0.2s ease-in;
    }

    a:hover {
        color: #66fcf1;
        text-shadow:0px 0px 30px #66fcf1;
        -moz-transition: all 0.2s ease-in;
        -o-transition: all 0.2s ease-in;
        -webkit-transition: all 0.2s ease-in;
        transition: all 0.2s ease-in;
    }
</style>

<h1><a><p align="center" style="font-size: 50pt">NOW PLAYING</p></a></h1>
<!-- Page Content -->
<div class="container">
    <!-- Jumbotron Header -->
    <div class="row text-center">
        <div class="col-sm-12 mt-5">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" align="center" style="height: fit-content;width: 350px; margin:auto;">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="src\images\poster\Stefanus.jpg">
                    </div>
                    <?php
                    /* @var $jadwal Jadwal*/
                    foreach ($jadwals as $jadwal)
                    {
                        date_default_timezone_set("Asia/Jakarta");
                        if($jadwal->getJadwalTanggal() == date("Y-m-d"))
                        {
                            $tempFilm = new Film();
                            $tempFilm->setFilmId($jadwal->getTbFilmFilmId());
                            $film = $filmDao->getFilmById($tempFilm);
                            /* @var $film Film*/
                            ?>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo $film->getFilmPoster();?>">
                            </div>
                        <?php
                        }
                    }
                    ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="row text-center">

            </div>
            <div class="row text-center">

            </div>
            <div class="row text-center">

            </div>
        </div>
    </div>
    <!-- Page Features -->
    <h1><a><p align="center" style="font-size: 50pt">UPCOMING MOVIES</p></a></h1>
    <!-- Jumbotron Header -->
    <div class="row text-center">
        <div class="col-sm-12 mt-5">
            <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" align="center" style="height: fit-content;width: 350px; margin:auto;">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="src\images\poster\Stefanus.jpg">
                    </div>
                    <?php
                    /* @var $jadwal Jadwal*/
                    foreach ($jadwals as $jadwal)
                    {
                        date_default_timezone_set("Asia/Jakarta");
                        if($jadwal->getJadwalTanggal() != date("Y-m-d"))
                        {
                            $tempFilm = new Film();
                            $tempFilm->setFilmId($jadwal->getTbFilmFilmId());
                            $film = $filmDao->getFilmById($tempFilm);
                            /* @var $film Film*/
                            ?>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo $film->getFilmPoster();?>">
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="row text-center">

            </div>
            <div class="row text-center">

            </div>
            <div class="row text-center">

            </div>
        </div>
    </div>
    <!-- /.container -->