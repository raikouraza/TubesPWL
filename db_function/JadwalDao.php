<?php


class JadwalDao
{
    function getAllJadwal()
    {
        $link = DBHelper::createMySQLConnection();

        $query = "SELECT * FROM tbjadwal j INNER JOIN tbfilm f ON j.tbFilm_film_id = f.film_id INNER JOIN tbstudio s ON j.tbStudio_studio_id = s.studio_id";

        $result = $link->query($query);

        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Jadwal");

        return $result;

    }
}