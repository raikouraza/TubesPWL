<?php

class FilmDao{

    function getAllFilm()
    {
        $link = DBHelper::createMySQLConnection();

        $query = "SELECT * FROM tbfilm";

        $result = $link->query($query);

        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Film");

        return $result;

    }

    function addFilm(Film $film)
    {
        $link = DBHelper::createMySQLConnection();
        $link->beginTransaction();
        $query = "INSERT INTO tbfilm(film_judul,
                                     film_deskripsi,
                                     film_poster,
                                     film_trailer,
                                     film_sutradara,
                                     film_aktor,
                                     film_durasi,
                                     film_rating,
                                     film_genre) 
                                     VALUES(?,?,?,?,?,?,?,?,?)";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $film->getFilmJudul(), PDO::PARAM_STR);
        $stmt->bindValue(2, $film->getFilmDeskripsi(), PDO::PARAM_STR);
        $stmt->bindValue(3, $film->getFilmPoster(), PDO::PARAM_STR);
        $stmt->bindValue(4, $film->getFilmTrailer(), PDO::PARAM_STR);
        $stmt->bindValue(5, $film->getFilmSutradara(), PDO::PARAM_STR);
        $stmt->bindValue(6, $film->getFilmAktor(), PDO::PARAM_STR);
        $stmt->bindValue(7, $film->getFilmDurasi(), PDO::PARAM_STR);
        $stmt->bindValue(8, $film->getFilmRating(), PDO::PARAM_STR);
        $stmt->bindValue(9, $film->getFilmGenre(), PDO::PARAM_STR);

        if ($stmt->execute()) {
            $link->commit();
        } else {
            $link->rollBack();
        }

        $link = null;

    }

    function deleteFilm(Film $film)
    {
        $link = DBHelper::createMySQLConnection();
        $link->beginTransaction();
        $query = "DELETE FROM tbfilm WHERE film_id=?";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $film->getFilmId(), PDO::PARAM_INT);
        if ($stmt->execute()) {
            $link->commit();
        } else {
            $link->rollBack();
        }

        $link = null;

    }

    function updateFilm(Film $film)
    {
        $link = DBHelper::createMySQLConnection();
        $link->beginTransaction();
        $query = "UPDATE tbfilm SET film_judul=?,
                                    film_deskripsi=?,
                                    film_poster=?,
                                    film_trailer=?,
                                    film_sutradara=?,
                                    film_aktor=?,
                                    film_durasi=?,
                                    film_rating=?,  
                                    film_genre=?  
                                    WHERE film_id=?";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $film->getFilmJudul(), PDO::PARAM_STR);
        $stmt->bindValue(2, $film->getFilmDeskripsi(), PDO::PARAM_STR);
        $stmt->bindValue(3, $film->getFilmPoster(), PDO::PARAM_STR);
        $stmt->bindValue(4, $film->getFilmTrailer(), PDO::PARAM_STR);
        $stmt->bindValue(5, $film->getFilmSutradara(), PDO::PARAM_STR);
        $stmt->bindValue(6, $film->getFilmAktor(), PDO::PARAM_STR);
        $stmt->bindValue(7, $film->getFilmDurasi(), PDO::PARAM_STR);
        $stmt->bindValue(8, $film->getFilmRating(), PDO::PARAM_STR);
        $stmt->bindValue(9, $film->getFilmGenre(), PDO::PARAM_STR);
        $stmt->bindValue(10, $film->getFilmId(), PDO::PARAM_INT);
        if ($stmt->execute()) {
            $link->commit();
        } else {
            $link->rollBack();
        }

        $link = null;

    }

    function getFilmById(Film $film)
    {
        $link = DBHelper::createMySQLConnection();

        $query = "SELECT * FROM tbfilm WHERE film_id = ? LIMIT 1";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $film->getFilmId(), PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetchObject("Film");

        $link = null;

        return $result;

    }
}