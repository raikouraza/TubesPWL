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
            $film_judul = filter_input(INPUT_POST, 'txtFilmJudul');
            $film_deskripsi = filter_input(INPUT_POST, 'txtFilmDeskripsi');
            $film_poster = filter_input(INPUT_POST, 'txtFilmPoster');
            $film_trailer = filter_input(INPUT_POST, 'txtFilmTrailer');
            $film_sutradara = filter_input(INPUT_POST, 'txtFilmSutradara');
            $film_nama_aktor = filter_input(INPUT_POST, 'txtFilmAktor');
            $film_durasi = filter_input(INPUT_POST, 'txtFilmDurasi');
            $film_rating = filter_input(INPUT_POST, 'txtRating');

            $film = new Film();
            $film->setFilmJudul($film_judul);
            $film->setFilmDeskripsi($film_deskripsi);
            $film->setFilmPoster($film_poster);
            $film->setFilmTrailer($film_trailer);
            $film->setFilmSutradara($film_sutradara);
            $film->setFilmAktor($film_nama_aktor);
            $film->setFilmDurasi($film_durasi);
            $film->setFilmRating($film_rating);

            if(fieldNotEmpty(array($film_judul, $film_deskripsi, $film_poster, $film_trailer, $film_sutradara, $film_nama_aktor, $film_durasi, $film_rating)))
            {
                if(isset($_FILES['txtFilmPoster']['name']))
                {
                    $targetDirectory = '../../src/images/poster/';
                    $targetFile = $targetDirectory . $_FILES['txtFilmPoster']['name'];
                    move_uploaded_file($_FILES['txtFilmPoster']['tmp_name'], $targetFile);
                    $film->setFilmPoster($targetFile);
                    $this->filmDao->addFilm($film);
                }
                else
                    $this->filmDao->addFilm($film);
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