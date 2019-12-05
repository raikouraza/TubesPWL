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
        $film_id = filter_input(INPUT_GET, 'film_id');
        if (isset($film_id))
            $film = $this->filmDao->getFilmById($film_id);
        // Change acording to submmit create button
        $submitted = filter_input(INPUT_POST, 'btnSubmit');
        if (isset($submitted)) {
            $film_judul = filter_input(INPUT_POST, 'txtFilmJudul');
            $film_tanggal_rilis = filter_input(INPUT_POST, 'txtFilmTanggalRilis');
            $film_deskripsi = filter_input(INPUT_POST, 'txtFilmDeskripsi');
            $film_genre = filter_input(INPUT_POST, 'txtFilmGenre');
            $film_trailer = filter_input(INPUT_POST, 'txtFilmTrailer');
            $film_jam_penayangan = filter_input(INPUT_POST, 'txtFilmJamPenayangan');
            $film_sutradara = filter_input(INPUT_POST, 'txtFilmSutradara');

            $updatedFilm = new Film();
            $updatedFilm->setFilmId($film_id);
            $updatedFilm->setFilmJudul($film_judul);
            $updatedFilm->setFilmTanggalRilis($film_tanggal_rilis);
            $updatedFilm->setFilmDeskripsi($film_deskripsi);
            $updatedFilm->setFilmGenre($film_genre);
            $updatedFilm->setFilmTrailer($film_trailer);
            $updatedFilm->setFilmJamPenayangan($film_jam_penayangan);
            $updatedFilm->setFilmSutradara($film_sutradara);

            // Belum Selesai
            if (fieldNotEmpty(array($film_judul, $film_tanggal_rilis, $film_deskripsi, $film_genre, $film_trailer, $film_jam_penayangan, $film_sutradara))) {
                if (isset($_FILES['txtFilmPoster']['name'])) {
                    $targetDirectory = 'src/images/poster';
                    /*@var $film Film*/
                    $targetFile = $targetDirectory . $film->getFilmPoster() . '.' . pathinfo($_FILES['txtFilmPoster']['name'], PATHINFO_EXTENSION);
                    move_uploaded_file($_FILES['txtFilmPoster']['tmp_name'], $targetFile);
                    $updatedFilm->setFilmPoster($targetFile);
                    $this->filmDao->updateFilm($updatedFilm);
                } else {
                    $this->filmDao->updateFilm($updatedFilm);
                }
                header('location:index.php?menu=fm');
            } else {
                $errMessage = 'Please check your input';
            }

            if (isset($errMessage)) {
                echo '<div class="err-msg">' . $errMessage . '</div>';
            }
        }
    }
}
