<?php


class Genre{
    private $genre_id;
    private $genre_name;

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
    public function getGenreName()
    {
        return $this->genre_name;
    }

    /**
     * @param mixed $genre_name
     */
    public function setGenreName($genre_name)
    {
        $this->genre_name = $genre_name;
    }


}