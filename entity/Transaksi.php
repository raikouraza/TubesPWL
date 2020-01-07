<?php


class Transaksi
{
    private $transaksi_id;
    private $transaksi_totalprice;
    private $transaksi_payment_method;
    private $transaksi_tanggal;
    private $tbTiket_tiket_id;
    private $tbTiket_tbJadwal_jadwal_id;
    private $tbTiket_tbMember_member_id;
    private $tbTiket_tbStudio_studio_id;
    private $tbFilm_film_id;

    /**
     * @return mixed
     */
    public function getTransaksiId()
    {
        return $this->transaksi_id;
    }

    /**
     * @param mixed $transaksi_id
     */
    public function setTransaksiId($transaksi_id)
    {
        $this->transaksi_id = $transaksi_id;
    }

    /**
     * @return mixed
     */
    public function getTransaksiTotalprice()
    {
        return $this->transaksi_totalprice;
    }

    /**
     * @param mixed $transaksi_totalprice
     */
    public function setTransaksiTotalprice($transaksi_totalprice)
    {
        $this->transaksi_totalprice = $transaksi_totalprice;
    }

    /**
     * @return mixed
     */
    public function getTransaksiPaymentMethod()
    {
        return $this->transaksi_payment_method;
    }

    /**
     * @param mixed $transaksi_payment_method
     */
    public function setTransaksiPaymentMethod($transaksi_payment_method)
    {
        $this->transaksi_payment_method = $transaksi_payment_method;
    }

    /**
     * @return mixed
     */
    public function getTransaksiTanggal()
    {
        return $this->transaksi_tanggal;
    }

    /**
     * @param mixed $transaksi_tanggal
     */
    public function setTransaksiTanggal($transaksi_tanggal)
    {
        $this->transaksi_tanggal = $transaksi_tanggal;
    }

    /**
     * @return mixed
     */
    public function getTbTiketTiketId()
    {
        return $this->tbTiket_tiket_id;
    }

    /**
     * @param mixed $tbTiket_tiket_id
     */
    public function setTbTiketTiketId($tbTiket_tiket_id)
    {
        $this->tbTiket_tiket_id = $tbTiket_tiket_id;
    }

    /**
     * @return mixed
     */
    public function getTbTiketTbJadwalJadwalId()
    {
        return $this->tbTiket_tbJadwal_jadwal_id;
    }

    /**
     * @param mixed $tbTiket_tbJadwal_jadwal_id
     */
    public function setTbTiketTbJadwalJadwalId($tbTiket_tbJadwal_jadwal_id)
    {
        $this->tbTiket_tbJadwal_jadwal_id = $tbTiket_tbJadwal_jadwal_id;
    }

    /**
     * @return mixed
     */
    public function getTbTiketTbMemberMemberId()
    {
        return $this->tbTiket_tbMember_member_id;
    }

    /**
     * @param mixed $tbTiket_tbMember_member_id
     */
    public function setTbTiketTbMemberMemberId($tbTiket_tbMember_member_id)
    {
        $this->tbTiket_tbMember_member_id = $tbTiket_tbMember_member_id;
    }

    /**
     * @return mixed
     */
    public function getTbTiketTbStudioStudioId()
    {
        return $this->tbTiket_tbStudio_studio_id;
    }

    /**
     * @param mixed $tbTiket_tbStudio_studio_id
     */
    public function setTbTiketTbStudioStudioId($tbTiket_tbStudio_studio_id)
    {
        $this->tbTiket_tbStudio_studio_id = $tbTiket_tbStudio_studio_id;
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


}