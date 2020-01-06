<?php


class JadwalDao
{
    function getAllJadwal()
    {
        $link = DBHelper::createMySQLConnection();

        $query = "SELECT * FROM tbjadwal j INNER JOIN tbfilm f ON j.tbFilm_film_id = f.film_id INNER JOIN tbstudio s ON j.tbStudio_studio_id = s.studio_id ORDER BY f.film_id";

        $result = $link->query($query);

        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Jadwal");

        return $result;
    }

    function getAllJadwalNow()
    {
        $link = DBHelper::createMySQLConnection();

        $query = "SELECT * FROM tbjadwal WHERE jadwal_tanggal = NOW()";

        $result = $link->query($query);

        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Jadwal");

        return $result;
    }

    function getAllJadwalDistinct()
    {
        $link = DBHelper::createMySQLConnection();

        $query = "SELECT jadwal_tanggal, jadwal_id FROM tbjadwal GROUP BY jadwal_tanggal";

        $result = $link->query($query);

        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Jadwal");

        return $result;
    }

    public function addJadwal(Jadwal $jadwal){
        $link = DBHelper::createMySQLConnection();
        $link->beginTransaction();

        $query='INSERT INTO tbjadwal(jadwal_id,jadwal_tanggal,jadwal_sesi,tbFilm_film_id,tbStudio_studio_id) VALUES (?,?,?,?,?)';
        $stmt = $link->prepare($query);
        $stmt->bindValue(1,$jadwal->getJadwalId(),PDO::PARAM_STR);
        $stmt->bindValue(2,$jadwal->getJadwalTanggal(),PDO::PARAM_STR);
        $stmt->bindValue(3,$jadwal->getJadwalSesi(),PDO::PARAM_STR);
        $stmt->bindValue(4,$jadwal->getFilm()->getFilmId(),PDO::PARAM_INT);
        $stmt->bindValue(5,$jadwal->getStudio()->getStudioId(),PDO::PARAM_INT);

        if ($stmt->execute()) {
            $link->commit();
        } else {
            $link->rollBack();
        }

        $link = null;
    }

    function updateJadwal(Jadwal $jadwal)
    {
        $link = DBHelper::createMySQLConnection();
        $link->beginTransaction();
        $query = "UPDATE tbjadwal SET jadwal_tanggal=?,
                                    jadwal_sesi=?,
                                    tbFilm_film_id=?,
                                    tbStudio_studio_id=?
                                    WHERE jadwal_id=?";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $jadwal->getJadwalTanggal(), PDO::PARAM_STR);
        $stmt->bindValue(2, $jadwal->getJadwalSesi(), PDO::PARAM_INT);
        $stmt->bindValue(3, $jadwal->getFilm()->getFilmId(), PDO::PARAM_INT);
        $stmt->bindValue(4, $jadwal->getStudio()->getStudioId(), PDO::PARAM_INT);
        $stmt->bindValue(5, $jadwal->getJadwalId(), PDO::PARAM_INT);
        if ($stmt->execute()) {
            $link->commit();
        } else {
            $link->rollBack();
        }

        $link = null;

    }

    function deleteJadwal(Jadwal $jadwal)
    {
        $link = DBHelper::createMySQLConnection();
        $link->beginTransaction();
        $query = "DELETE FROM tbjadwal WHERE jadwal_id=?";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $jadwal->getJadwalId(), PDO::PARAM_INT);
        if ($stmt->execute()) {
            $link->commit();
        } else {
            $link->rollBack();
        }

        $link = null;

    }

    function getJadwalById(Jadwal $jadwal)
    {
        $link = DBHelper::createMySQLConnection();

        $query = "SELECT * FROM tbjadwal j INNER JOIN tbfilm f ON j.tbFilm_film_id = f.film_id INNER JOIN tbstudio s ON j.tbStudio_studio_id = s.studio_id WHERE j.jadwal_id = ? LIMIT 1 ";

        $stmt = $link->prepare($query);
        $stmt->bindValue(1, $jadwal->getJadwalId(), PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetchObject("Jadwal");

        $link = null;

        return $result;
    }
}