<?php


class Genre{
    private $genre_id;
    private $genre_kategori;
    /**
     * @return mixed
     */
    public function getGenreId()
    {
        return $this->genre_id;
    }

    /**
     * @param mixed $genre_id
     */
    public function setGenreId($genre_id)
    {
        $this->genre_id = $genre_id;
    }

    /**
     * @return mixed
     */
    public function getGenreKategori()
    {
        return $this->genre_kategori;
    }

    /**
     * @param mixed $genre_kategori
     */
    public function setGenreKategori($genre_kategori)
    {
        $this->genre_kategori = $genre_kategori;
    }


}