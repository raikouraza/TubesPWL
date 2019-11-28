<?php

class Film{
    private $film_id;
    private $film_judul;
    private $film_tanggal_rilis;
    private $film_deskripsi;
    private $film_poster;
    private $film_genre;
    private $film_trailer;
    private $film_jam_penayangan;
    private $film_sutradara;

    /**
     * @return mixed
     */
    public function getFilmId()
    {
        return $this->film_id;
    }

    /**
     * @param mixed $film_id
     */
    public function setFilmId($film_id)
    {
        $this->film_id = $film_id;
    }

    /**
     * @return mixed
     */
    public function getFilmJudul()
    {
        return $this->film_judul;
    }

    /**
     * @param mixed $film_judul
     */
    public function setFilmJudul($film_judul)
    {
        $this->film_judul = $film_judul;
    }

    /**
     * @return mixed
     */
    public function getFilmTanggalRilis()
    {
        return $this->film_tanggal_rilis;
    }

    /**
     * @param mixed $film_tanggal_rilis
     */
    public function setFilmTanggalRilis($film_tanggal_rilis)
    {
        $this->film_tanggal_rilis = $film_tanggal_rilis;
    }

    /**
     * @return mixed
     */
    public function getFilmDeskripsi()
    {
        return $this->film_deskripsi;
    }

    /**
     * @param mixed $film_deskripsi
     */
    public function setFilmDeskripsi($film_deskripsi)
    {
        $this->film_deskripsi = $film_deskripsi;
    }

    /**
     * @return mixed
     */
    public function getFilmPoster()
    {
        return $this->film_poster;
    }

    /**
     * @param mixed $film_poster
     */
    public function setFilmPoster($film_poster)
    {
        $this->film_poster = $film_poster;
    }

    /**
     * @return mixed
     */
    public function getFilmGenre()
    {
        return $this->film_genre;
    }

    /**
     * @param mixed $film_genre
     */
    public function setFilmGenre($film_genre)
    {
        $this->film_genre = $film_genre;
    }

    /**
     * @return mixed
     */
    public function getFilmTrailer()
    {
        return $this->film_trailer;
    }

    /**
     * @param mixed $film_trailer
     */
    public function setFilmTrailer($film_trailer)
    {
        $this->film_trailer = $film_trailer;
    }

    /**
     * @return mixed
     */
    public function getFilmJamPenayangan()
    {
        return $this->film_jam_penayangan;
    }

    /**
     * @param mixed $film_jam_penayangan
     */
    public function setFilmJamPenayangan($film_jam_penayangan)
    {
        $this->film_jam_penayangan = $film_jam_penayangan;
    }

    /**
     * @return mixed
     */
    public function getFilmSutradara()
    {
        return $this->film_sutradara;
    }

    /**
     * @param mixed $film_sutradara
     */
    public function setFilmSutradara($film_sutradara)
    {
        $this->film_sutradara = $film_sutradara;
    }
}