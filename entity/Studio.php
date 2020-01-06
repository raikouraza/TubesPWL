<?php


class Studio{
    private $studio_id;
    private $studio_nama;
    private $studio_kapasitas;

    /**
     * @return mixed
     */
    public function getStudioKapasitas()
    {
        return $this->studio_kapasitas;
    }

    /**
     * @param mixed $studio_kapasitas
     */
    public function setStudioKapasitas($studio_kapasitas)
    {
        $this->studio_kapasitas = $studio_kapasitas;
    }

    /**
     * @return mixed
     */
    public function getStudioId()
    {
        return $this->studio_id;
    }

    /**
     * @param mixed $studio_id
     */
    public function setStudioId($studio_id)
    {
        $this->studio_id = $studio_id;
    }

    /**
     * @return mixed
     */
    public function getStudioNama()
    {
        return $this->studio_nama;
    }

    /**
     * @param mixed $studio_nama
     */
    public function setStudioNama($studio_nama)
    {
        $this->studio_nama = $studio_nama;
    }



}