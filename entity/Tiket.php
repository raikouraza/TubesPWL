<?php


class Tiket{
    private $tiket_id;
    private $tiket_harga;
    private $tiket_nomor_kursi;
    private $tbMember_member_id;
    private $tbStudio_studio_id;
    private $tbJadwal_jadwal_id;
    /**
     * @return mixed
     */
    public function getTiketId()
    {
        return $this->tiket_id;
    }

    /**
     * @param mixed $tiket_id
     */
    public function setTiketId($tiket_id)
    {
        $this->tiket_id = $tiket_id;
    }

    /**
     * @return mixed
     */
    public function getTiketHarga()
    {
        return $this->tiket_harga;
    }

    /**
     * @param mixed $tiket_harga
     */
    public function setTiketHarga($tiket_harga)
    {
        $this->tiket_harga = $tiket_harga;
    }

    /**
     * @return mixed
     */
    public function getTiketNomorKursi()
    {
        return $this->tiket_nomor_kursi;
    }

    /**
     * @param mixed $tiket_nomor_kursi
     */
    public function setTiketNomorKursi($tiket_nomor_kursi)
    {
        $this->tiket_nomor_kursi = $tiket_nomor_kursi;
    }

    /**
     * @return mixed
     */
    public function getTbMemberMemberId()
    {
        return $this->tbMember_member_id;
    }

    /**
     * @param mixed $tbMember_member_id
     */
    public function setTbMemberMemberId($tbMember_member_id)
    {
        $this->tbMember_member_id = $tbMember_member_id;
    }

    /**
     * @return mixed
     */
    public function getTbStudioStudioId()
    {
        return $this->tbStudio_studio_id;
    }

    /**
     * @param mixed $tbStudio_studio_id
     */
    public function setTbStudioStudioId($tbStudio_studio_id)
    {
        $this->tbStudio_studio_id = $tbStudio_studio_id;
    }

    /**
     * @return mixed
     */
    public function getTbJadwalJadwalId()
    {
        return $this->tbJadwal_jadwal_id;
    }

    /**
     * @param mixed $tbJadwal_jadwal_id
     */
    public function setTbJadwalJadwalId($tbJadwal_jadwal_id)
    {
        $this->tbJadwal_jadwal_id = $tbJadwal_jadwal_id;
    }


}