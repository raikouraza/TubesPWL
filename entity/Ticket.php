<?php


class Ticket{
    private $ticket_id;
    private $ticket_harga;
    private $ticket_kode;
    private $studio;
    private $film;

    /**
     * @return mixed
     */
    public function getTicketId()
    {
        return $this->ticket_id;
    }

    /**
     * @param mixed $ticket_id
     */
    public function setTicketId($ticket_id)
    {
        $this->ticket_id = $ticket_id;
    }

    /**
     * @return mixed
     */
    public function getTicketHarga()
    {
        return $this->ticket_harga;
    }

    /**
     * @param mixed $ticket_harga
     */
    public function setTicketHarga($ticket_harga)
    {
        $this->ticket_harga = $ticket_harga;
    }

    /**
     * @return mixed
     */
    public function getTicketKode()
    {
        return $this->ticket_kode;
    }

    /**
     * @param mixed $ticket_kode
     */
    public function setTicketKode($ticket_kode)
    {
        $this->ticket_kode = $ticket_kode;
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
}