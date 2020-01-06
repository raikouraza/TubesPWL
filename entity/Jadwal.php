<?php

class Jadwal{
    private $jadwal_id;
    private $jadwal_tanggal;
    private $jadwal_sesi;
    private $film;
    private $studio;

    /**
     * Jadwal constructor.
     * @param $film
     * @param $studio
     */
    public function __construct($film, $studio)
    {
        $this->film = new Film();
        $this->studio = new Studio();
    }

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

    /**
     * @return Film
     */
    public function getFilm()
    {
        return $this->film;
    }

    /**
     * @param Film $film
     */
    public function setFilm($film)
    {
        $this->film = $film;
    }

    /**
     * @return Studio
     */
    public function getStudio()
    {
        return $this->studio;
    }

    /**
     * @param Studio $studio
     */
    public function setStudio($studio)
    {
        $this->studio = $studio;
    }

    public function __set($name, $value)
    {
        if (!isset($this->film)) {
            $this->film = new Film();
        }
        if (!isset($this->studio)) {
            $this->studio = new Studio();
        }
        if (isset($value)) {
            switch ($name) {
                case 'film_id':
                    $this->film->setFilmId($value);
                    break;
                case 'film_judul':
                    $this->film->setFilmJudul($value);
                    break;
                case 'studio_id':
                    $this->studio->setStudioId($value);
                    break;
                case 'studio_nama':
                    $this->studio->setStudioNama($value);
                    break;
                default:
                    break;
            }
        }
    }
}