<?php

class SesiDao{

    function getAllSesi()
    {
        $link = DBHelper::createMySQLConnection();

        $query = "SELECT * FROM tbsesi";

        $result = $link->query($query);

        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Sesi");

        return $result;

    }

    function addSesi(Sesi $sesi)
    {
        $link = DBHelper::createMySQLConnection();
        $link->beginTransaction();
        $query = "INSERT INTO tbsesi(sesi_jam) VALUES(?)";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $sesi->getSesiJam(), PDO::PARAM_STR);

        if ($stmt->execute()) {
            $link->commit();
        } else {
            $link->rollBack();
        }

        $link = null;

    }

    function deleteSesi(Sesi $sesi)
    {
        $link = DBHelper::createMySQLConnection();
        $link->beginTransaction();
        $query = "DELETE FROM tbsesi WHERE sesi_id=?";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $sesi->getSesiId(), PDO::PARAM_INT);
        if ($stmt->execute()) {
            $link->commit();
        } else {
            $link->rollBack();
        }

        $link = null;

    }

    function updateSesi(Sesi $sesi)
    {
        $link = DBHelper::createMySQLConnection();
        $link->beginTransaction();
        $query = "UPDATE tbsesi SET sesi_jam=?
                                    WHERE sesi_id=?";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $sesi->getSesiJam(), PDO::PARAM_STR);
        $stmt->bindValue(2, $sesi->getSesiId(), PDO::PARAM_INT);
        if ($stmt->execute()) {
            $link->commit();
        } else {
            $link->rollBack();
        }

        $link = null;

    }

    function getSesiById(Sesi $sesi)
    {
        $link = DBHelper::createMySQLConnection();

        $query = "SELECT * FROM tbsesi WHERE sesi_id = ? LIMIT 1";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $sesi->getSesiId(), PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetchObject("Sesi");

        $link = null;

        return $result;

    }
}