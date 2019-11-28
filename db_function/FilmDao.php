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
                                     film_tanggal_rilis,
                                     film_deskripsi,
                                     film_poster,
                                     film_genre,
                                     film_trailer,
                                     film_jam_penayangan,
                                     film_sutradara
                                     ) VALUES(?,?,?,?,?,?,?,?)";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $film->getFilmJudul(), PDO::PARAM_STR);
        $stmt->bindValue(2, $film->getFilmTanggalRilis(), PDO::PARAM_STR);
        $stmt->bindValue(3, $film->getFilmDeskripsi(), PDO::PARAM_STR);
        $stmt->bindValue(4, $film->getFilmPoster(), PDO::PARAM_STR);
        $stmt->bindValue(5, $film->getFilmGenre(), PDO::PARAM_STR);
        $stmt->bindValue(6, $film->getFilmTrailer(), PDO::PARAM_STR);
        $stmt->bindValue(7, $film->getFilmJamPenayangan(), PDO::PARAM_STR);
        $stmt->bindValue(8, $film->setFilmSutradara(), PDO::PARAM_STR);

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
                                    film_tanggal_rilis=?,
                                    film_deskripsi=?,
                                    film_poster=?,
                                    film_genre=?,
                                    film_trailer=?,
                                    film_jam_penayangan=?,
                                    film_sutradara=?,
                                    WHERE film_id=?";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $film->getFilmName(), PDO::PARAM_STR);
        $stmt->bindValue(2, $film->getFilmTanggalRilis(), PDO::PARAM_STR);
        $stmt->bindValue(3, $film->getFilmDeskripsi(), PDO::PARAM_STR);
        $stmt->bindValue(4, $film->getFilmPoster(), PDO::PARAM_STR);
        $stmt->bindValue(5, $film->getFilmGenre(), PDO::PARAM_STR);
        $stmt->bindValue(6, $film->getFilmTrailer(), PDO::PARAM_STR);
        $stmt->bindValue(7, $film->getFilmJamPenayangan(), PDO::PARAM_STR);
        $stmt->bindValue(8, $film->setFilmSutradara(), PDO::PARAM_STR);
        $stmt->bindValue(9, $film->getFilmId(), PDO::PARAM_INT);
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