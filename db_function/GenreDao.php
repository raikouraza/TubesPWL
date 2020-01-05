<?php

class GenreDao{

    function getAllGenre()
    {
        $link = DBHelper::createMySQLConnection();

        $query = "SELECT * FROM tbgenre";

        $result = $link->query($query);

        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Genre");

        return $result;

    }

    function addGenre(Genre $genre)
    {
        $link = DBHelper::createMySQLConnection();
        $link->beginTransaction();
        $query = "INSERT INTO tbgenre(genre_kategori) VALUES(?)";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $genre->getGenreKategori(), PDO::PARAM_STR);

        if ($stmt->execute()) {
            $link->commit();
        } else {
            $link->rollBack();
        }

        $link = null;

    }

    function deleteGenre(Genre $genre)
    {
        $link = DBHelper::createMySQLConnection();
        $link->beginTransaction();
        $query = "DELETE FROM tbgenre WHERE genre_id=?";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $genre->getGenreId(), PDO::PARAM_INT);
        if ($stmt->execute()) {
            $link->commit();
        } else {
            $link->rollBack();
        }

        $link = null;

    }

    function updateGenre(Genre $genre)
    {
        $link = DBHelper::createMySQLConnection();
        $link->beginTransaction();
        $query = "UPDATE tbgenre SET genre_kategori=?
                                    WHERE genre_id=?";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $genre->getGenreKategori(), PDO::PARAM_STR);
        $stmt->bindValue(2, $genre->getGenreId(), PDO::PARAM_INT);
        if ($stmt->execute()) {
            $link->commit();
        } else {
            $link->rollBack();
        }

        $link = null;

    }

    function getGenreById(Genre $genre)
    {
        $link = DBHelper::createMySQLConnection();

        $query = "SELECT * FROM tbgenre WHERE genre_id = ? LIMIT 1";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $genre->getGenreId(), PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetchObject("Genre");

        $link = null;

        return $result;

    }
}