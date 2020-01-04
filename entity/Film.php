<?php

class Film{
    private $film_id;
    private $film_judul;
    private $film_deskripsi;
    private $film_poster;
    private $film_trailer;
    private $film_sutradara;
    private $film_aktor;
    private $film_durasi;
    private $film_rating;
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

    /**
     * @return mixed
     */
    public function getFilmAktor()
    {
        return $this->film_aktor;
    }

    /**
     * @param mixed $film_aktor
     */
    public function setFilmAktor($film_aktor)
    {
        $this->film_aktor = $film_aktor;
    }

    /**
     * @return mixed
     */
    public function getFilmDurasi()
    {
        return $this->film_durasi;
    }

    /**
     * @param mixed $film_durasi
     */
    public function setFilmDurasi($film_durasi)
    {
        $this->film_durasi = $film_durasi;
    }

    /**
     * @return mixed
     */
    public function getFilmRating()
    {
        return $this->film_rating;
    }

    /**
     * @param mixed $film_rating
     */
    public function setFilmRating($film_rating)
    {
        $this->film_rating = $film_rating;
    }


}