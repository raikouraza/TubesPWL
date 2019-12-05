<?php


class Sesi
{
private $sesi_id;
private $sesi_jam;

    /**
     * @return mixed
     */
    public function getSesiId()
    {
        return $this->sesi_id;
    }

    /**
     * @param mixed $sesi_id
     */
    public function setSesiId($sesi_id)
    {
        $this->sesi_id = $sesi_id;
    }

    /**
     * @return mixed
     */
    public function getSesiJam()
    {
        return $this->sesi_jam;
    }

    /**
     * @param mixed $sesi_jam
     */
    public function setSesiJam($sesi_jam)
    {
        $this->sesi_jam = $sesi_jam;
    }
}