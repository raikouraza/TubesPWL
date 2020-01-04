<?php

class CreateFilmController
{
    private $filmDao;

    public function __construct()
    {
        $this->filmDao = new FilmDao();
    }
    public function index()
    {
        // Change acording to submmit create button
        $submitted = filter_input(INPUT_POST, 'btnSubmit');
        if (isset($submitted)) {
            $film_judul = filter_input(INPUT_POST, 'txtjudul');
            $film_tanggal_rilis = filter_input(INPUT_POST, 'txtTanggal');
            $film_deskripsi = filter_input(INPUT_POST, 'txtDeskripsi');
            $film_genre = filter_input(INPUT_POST, 'txtGenre');
            $film_trailer = filter_input(INPUT_POST, 'txtTrailer');
            $film_jam_penayangan = filter_input(INPUT_POST, 'txtJam');
            $film_sutradara = filter_input(INPUT_POST, 'txtSutradara');

            $film = new Film();
            $film->setFilmJudul($film_judul);
            $film->setFilmTanggalRilis($film_tanggal_rilis);
            $film->setFilmDeskripsi($film_deskripsi);
            $film->setFilmGenre($film_genre);
            $film->setFilmTrailer($film_trailer);
            $film->setFilmJamPenayangan($film_jam_penayangan);
            $film->setFilmSutradara($film_sutradara);

            if(fieldNotEmpty(array( $film_judul, $film_tanggal_rilis, $film_deskripsi, $film_genre, $film_jam_penayangan, $film_sutradara)))
            {
                if(isset($_FILES['txtFilmPoster']['name']))
                {
                    $targetDirectory = 'src/images/poster';
                    $targetFile = $targetDirectory . '.' . pathinfo($_FILES['txtFilmPoster']['name'], PATHINFO_EXTENSION);
                    move_uploaded_file($_FILES['txtFilmPoster']['tmp_name'], $targetFile);
                    $film->setFilmPoster($targetFile);
                    $this->filmDao->addFilm($film);
                }
                else
                {
                    $this->filmDao->addFilm($film);
                    echo 'masuk pa eko';
                }
                header('location:../../view/dashboard/dashboard_index.php?menu=createFilm');
            }
            else
                $errMessage = 'Please check your input!';
        }

        if(isset($errMessage))
            echo '<div class="err-msg">' . $errMessage . '</div>';
        $films = $this->filmDao->getAllFilm();
        include_once '../../view/dashboard/form_create_film.php';
    }
}