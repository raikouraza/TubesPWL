<?php

class StudioDao
{

    function getAllStudio()
    {
        $link = DBHelper::createMySQLConnection();

        $query = "SELECT * FROM tbstudio";

        $result = $link->query($query);

        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Studio");

        return $result;

    }

    function getAllStudioDistinct()
    {
        $link = DBHelper::createMySQLConnection();

        $query = "SELECT DISTINCT studio_nama, studio_id FROM tbstudio";

        $result = $link->query($query);

        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Studio");

        return $result;

    }

    function addStudio(Studio $studio)
    {
        $link = DBHelper::createMySQLConnection();
        $link->beginTransaction();
        $query = "INSERT INTO tbstudio(
                                     studio_nama, studio_kapasitas) 
                                     VALUES(?, ?)";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $studio->getStudioNama(), PDO::PARAM_STR);
        $stmt->bindValue(2, $studio->getStudioKapasitas(), PDO::PARAM_INT);


        if ($stmt->execute()) {
            $link->commit();
        } else {
            $link->rollBack();
        }

        $link = null;

    }

    function deleteStudio(Studio $studio)
    {
        $link = DBHelper::createMySQLConnection();
        $link->beginTransaction();
        $query = "DELETE FROM tbstudio WHERE studio_id=?";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $studio->getStudioId(), PDO::PARAM_INT);
        if ($stmt->execute()) {
            $link->commit();
        } else {
            $link->rollBack();
        }

        $link = null;

    }

    function updateStudio(Studio $studio)
    {
        $link = DBHelper::createMySQLConnection();
        $link->beginTransaction();
        $query = "UPDATE tbstudio SET studio_nama=?, studio_kapasitas=?
                                    WHERE studio_id=?";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $studio->getStudioNama(), PDO::PARAM_STR);
        $stmt->bindValue(2, $studio->getStudioKapasitas(), PDO::PARAM_INT);
        $stmt->bindValue(3, $studio->getStudioId(), PDO::PARAM_INT);
        if ($stmt->execute()) {
            $link->commit();
        } else {
            $link->rollBack();
        }

        $link = null;

    }

    function getStudioById(Studio $studio)
    {
        $link = DBHelper::createMySQLConnection();

        $query = "SELECT * FROM tbstudio WHERE studio_id = ? LIMIT 1";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $studio->getStudioId(), PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetchObject("Studio");

        $link = null;

        return $result;

    }
}