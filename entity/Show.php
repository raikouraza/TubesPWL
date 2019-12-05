<?php


class Show
{
    private $show_id;
    private $show_status;
    private $studio;
    private $film;
    private $sesi;

    /**
     * @return mixed
     */
    public function getShowStatus()
    {
        return $this->show_status;
    }

    /**
     * @param mixed $show_status
     */
    public function setShowStatus($show_status)
    {
        $this->show_status = $show_status;
    }


    /**
     * @return mixed
     */
    public function getShowId()
    {
        return $this->show_id;
    }

    /**
     * @param mixed $show_id
     */
    public function setShowId($show_id)
    {
        $this->show_id = $show_id;
    }

    /**
     * @return Studio
     */
    public function getStudio()
    {
        return $this->studio;
    }

    /**
     * @param mixed $studio
     */
    public function setStudio($studio)
    {
        $this->studio = $studio;
    }

    /**
     * @return Film
     */
    public function getFilm()
    {
        return $this->film;
    }

    /**
     * @param mixed $film
     */
    public function setFilm($film)
    {
        $this->film = $film;
    }

    /**
     * @return Sesi
     */
    public function getSesi()
    {
        return $this->sesi;
    }

    /**
     * @param mixed $sesi
     */
    public function setSesi($sesi)
    {
        $this->sesi = $sesi;
    }
}