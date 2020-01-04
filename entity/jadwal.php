<?php

class jadwal{
    private $jadwal_id;
    private $jadwal_tanggal;
    private $jadwal_sesi;
    private $tbFilm_film_id;
    /**
     * @return mixed
     */
    public function getJadwalId()
    {
        return $this->jadwal_id;
    }

    /**
     * @param mixed $jadwal_id
     */
    public function setJadwalId($jadwal_id)
    {
        $this->jadwal_id = $jadwal_id;
    }

    /**
     * @return mixed
     */
    public function getJadwalTanggal()
    {
        return $this->jadwal_tanggal;
    }

    /**
     * @param mixed $jadwal_tanggal
     */
    public function setJadwalTanggal($jadwal_tanggal)
    {
        $this->jadwal_tanggal = $jadwal_tanggal;
    }

    /**
     * @return mixed
     */
    public function getJadwalSesi()
    {
        return $this->jadwal_sesi;
    }

    /**
     * @param mixed $jadwal_sesi
     */
    public function setJadwalSesi($jadwal_sesi)
    {
        $this->jadwal_sesi = $jadwal_sesi;
    }

    /**
     * @return mixed
     */
    public function getTbFilmFilmId()
    {
        return $this->tbFilm_film_id;
    }

    /**
     * @param mixed $tbFilm_film_id
     */
    public function setTbFilmFilmId($tbFilm_film_id)
    {
        $this->tbFilm_film_id = $tbFilm_film_id;
    }



}